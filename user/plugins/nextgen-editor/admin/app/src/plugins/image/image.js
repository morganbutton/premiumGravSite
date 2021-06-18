import './imagesrc';
import './imageupload';
import { convertImageParseResult } from './utils';
import './image.css';

const Image = window.nextgenEditor.classes.image.class;

export default {};

export const imageRegexp = /\.(jpg|jpeg|png|gif|bmp|svg)/;

window.nextgenEditor.addPlugin('GravImage', {
  requires: [Image],
  init() {
    this.editor.model.schema.extend('image', {
      allowAttributes: ['data-href'],
      allowWhere: '$text',
      isBlock: false,
      isInline: true,
    });
  },
});

window.nextgenEditor.addHook('hookOptions', (options) => {
  options.nextgenEditor.image = options.nextgenEditor.image || {};
  options.nextgenEditor.image.toolbar = options.nextgenEditor.image.toolbar || [];

  options.nextgenEditor.image.toolbar.push(
    'imageSrc',
    'imageTextAlternative',
  );

  return options;
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 50,
  async handler(options, input) {
    let output = input;

    // convert links and images
    const domOutput = new DOMParser().parseFromString(output, 'text/html');

    [...domOutput.querySelectorAll('a[href]')].forEach((link) => {
      link.setAttribute('href', decodeURIComponent(link.getAttribute('href')));
    });
    [...domOutput.querySelectorAll('img[src]')].forEach((image) => {
      image.setAttribute('src', decodeURIComponent(image.getAttribute('src')));
    });

    const data = {
      a: [...domOutput.querySelectorAll('a[href]')].map((element) => element.outerHTML).filter((value, index, self) => self.indexOf(value) === index),
      img: [...domOutput.querySelectorAll('img[src]')].map((element) => element.outerHTML).filter((value, index, self) => self.indexOf(value) === index),
    };

    if (!data.a.length && !data.img.length) {
      return output;
    }

    const body = new FormData();
    body.append('route', btoa(`/${window.GravAdmin.config.route}`));
    body.append('data', JSON.stringify(data));

    const res = await fetch(`${window.GravAdmin.config.base_url_relative}/action:convertUrls/admin-nonce:${window.GravAdmin.config.admin_nonce}`, { body, method: 'POST' })
      .then((resp) => {
        if (!resp.ok) return null;
        return resp.json();
      });

    if (res && res.status === 'success') {
      [...domOutput.querySelectorAll('a[href]')].forEach((link) => {
        if (res.data.links[link.outerHTML]) {
          link.outerHTML = res.data.links[link.outerHTML];
        }
      });

      [...domOutput.querySelectorAll('img[src]')].forEach((image) => {
        if (res.data.images[image.outerHTML]) {
          image.outerHTML = convertImageParseResult(res.data.images[image.outerHTML]);
        }
      });
    }

    output = domOutput.body.innerHTML;

    // preserve spaces around inline images
    output = output.replace(/( ?)(<img((((?!(\/>)).)|\n)*)\/>)( ?)/gm, (...matches) => `${matches[1] ? '&nbsp;' : ''}${matches[2]}${matches[7] ? '&nbsp;' : ''}`);

    return output;
  },
});

window.nextgenEditor.addHook('hookHTMLtoMarkdown', {
  weight: -50,
  handler(options, editor, input) {
    let output = input;

    const domOutput = new DOMParser().parseFromString(output, 'text/html');

    const convert = (selector, attribute) => {
      [...domOutput.querySelectorAll(selector)].forEach((element) => {
        let url = element.getAttribute(`data-${attribute}`);
        url = url.replace(/ /g, '%20');

        element.removeAttribute(`data-${attribute}`);
        element.setAttribute(attribute, url);
      });
    };

    convert('a[data-href]', 'href');
    convert('img[data-src]', 'src');

    output = domOutput.body.innerHTML;

    // fix inline image
    output = output.replace(/<\/p><figure class="image">((((?!(<\/figure>)).)|\n)*)<\/figure>((((?!(<p>)).)|\n)*)<p>/gm, '$1$5');

    // fix image figure
    output = output.replace(/<figure class="image">((((?!(<\/figure>)).)|\n)*)<\/figure>/gm, '$1');

    return output;
  },
});
