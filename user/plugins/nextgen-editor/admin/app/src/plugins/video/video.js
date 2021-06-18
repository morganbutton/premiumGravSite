export default {};

export const videoRegexp = /\.(mov|mp4|ogg|webm)/;

function beforeUrlConvert(url) {
  const uri = new URL(url, 'https://dummy.test');

  if (!uri.searchParams.get('lightbox') && videoRegexp.test(uri.pathname)) {
    uri.searchParams.set('lightbox', '1');
  }

  const newUrl = uri.toString().replace(`${uri.origin}/`, '');
  return newUrl;
}

function afterUrlConvert(url) {
  const uri = new URL(url, 'https://dummy.test');

  if (uri.searchParams.get('lightbox') && videoRegexp.test(uri.pathname)) {
    uri.searchParams.delete('lightbox');
  }

  const newUrl = uri.toString().replace(`${uri.origin}/`, '');
  return newUrl;
}

window.nextgenEditor.addHook('hookImageBeforeUrlConvert', beforeUrlConvert);
window.nextgenEditor.addHook('hookImageAfterUrlConvert', afterUrlConvert);

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 10,
  handler(options, input) {
    let output = input;

    const domOutput = new DOMParser().parseFromString(output, 'text/html');

    [...domOutput.querySelectorAll('img[src]')].forEach((img) => {
      img.setAttribute('src', beforeUrlConvert(img.getAttribute('src')));
    });

    output = domOutput.body.innerHTML;

    return output;
  },
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 90,
  handler(options, input) {
    let output = input;

    const domOutput = new DOMParser().parseFromString(output, 'text/html');

    [...domOutput.querySelectorAll('img[data-src]')].forEach((img) => {
      img.setAttribute('data-src', afterUrlConvert(img.getAttribute('data-src')));
    });

    output = domOutput.body.innerHTML;

    return output;
  },
});
