import MarkdownIt from 'markdown-it';
import TurndownService from 'turndown';
import { gfm } from 'turndown-plugin-gfm';

let markdownitService = null;
let turndownService = null;

export default {};

export function toHTML(input, context = 'block', options = {}) {
  let content = input;
  // eslint-disable-next-line camelcase
  if (options.transformations?.nonbreaking_space) {
    content = content.replace(/\u00A0/g, ' ').replace(/&nbsp;/g, ' ');
  }

  let output = markdownitService.render(content);

  if (context === 'inline') {
    output = output.trim().replace(/^<p>(.*)<\/p>$/, '$1');
  }

  return output;
}

export function toMarkdown(input) {
  return turndownService.turndown(input);
}

export function formatHTML(input) {
  const tab = '\t';
  let result = '';
  let indent = '';

  input.split(/>\s*</).forEach((element) => {
    if (element.match(/^\/\w/)) {
      indent = indent.substring(tab.length);
    }

    result += `${indent}<${element}>\r\n`;

    if (element.match(/^<?\w[^>]*[^/]$/) && !element.startsWith('input')) {
      indent += tab;
    }
  });

  return result.substring(1, result.length - 3);
}

function getMarkdownitService(options) {
  if (options.highlight) {
    // eslint-disable-next-line no-eval
    options.highlight = eval(`(${options.highlight})`);
  }

  const md = MarkdownIt(options);

  md.renderer.rules.html_block = (tokens, index) => {
    const output = tokens[index].content;
    const htmlEmbed = new RegExp('(<div\\s+?class\\s*=\\s*[\'\\"][^\'\\"]*?\\b)raw-html-embed\\b.*?"', 'i');
    const oEmbed = new RegExp('(<figure\\s+?class="media">)', 'i');

    if (output.match(htmlEmbed) || output.match(oEmbed)) {
      return output;
    }

    return `<div class="raw-html-embed">${output}</div>`;

    // Old way pre HTML Snippet plugin
    //
    // // escape html
    // output = md.utils.escapeHtml(output);
    //
    // // preserve line breaks
    // output = output.replace(/\n$/, '').replace(/\n/g, '<br>\n');
    //
    // // preserve leading spaces
    // output = output.replace(/^ +/gm, (spaces) => '&nbsp;'.repeat(spaces.length));
    //
    // // preserve trailing spaces
    // output = output.replace(/ +$/gm, (spaces) => '&nbsp;'.repeat(spaces.length));
    //
    // return `<p>${output}</p>`;
  };

  return md;
}

function getTurndownService(options) {
  TurndownService.prototype.escape = function escape(string) {
    return string;
  };

  const td = new TurndownService({
    ...options,
    ...{
      blankReplacement(content, node) {
        const types = ['OEMBED', 'FIGURE'];
        if (types.indexOf(node.nodeName) !== -1) {
          return `\n\n${node.outerHTML}\n\n`;
        }

        const output = [];
        node.childNodes.forEach((child) => {
          if (types.indexOf(child.nodeName) !== -1) {
            output.push(child.outerHTML);
          }
        });
        if (output.length) {
          return `\n\n${output.join('\n\n')}\n\n`;
        }

        return node.isBlock ? '\n\n' : '';
      },
    },
  });

  td.use(gfm);

  // fix issue with replacing <br> tags by line breaks
  td.addRule('br_replace', {
    replacement: () => '  \n',
    filter: 'br',
  });

  // fix issue with strikethrough
  td.addRule('strikethrough', {
    replacement: (content) => `~~${content}~~`,
    filter: ['s'],
  });

  td.addRule('highlight', {
    replacement: (content) => `<mark>${content}</mark>`,
    filter: ['mark'],
  });

  // preserve html snippets (raw-html-embed)
  td.addRule('html_snippet', {
    filter: (node) => node.nodeName === 'DIV' && node.classList.contains('raw-html-embed'),
    replacement: (content, node) => `\n\n${formatHTML(node.outerHTML)}\n\n`,
  });

  // preserve oEmbed media sources
  td.addRule('figure', {
    filter: (node) => node.nodeName === 'FIGURE' && node.classList.contains('media'),
    replacement: (content, node) => node.outerHTML,
  });

  // preserve oEmbed media sources
  td.addRule('oembed', {
    filter: (node) => node.nodeName === 'OEMBED' && node.parentNode.nodeName === 'FIGURE' && node.parentNode.classList.contains('media'),
    replacement: (content, node) => node.outerHTML,
  });

  return td;
}

window.nextgenEditor.addHook('hookOptions', {
  weight: 100,
  handler(options) {
    markdownitService = getMarkdownitService(options.markdownit);
    turndownService = getTurndownService(options.turndown);

    return options;
  },
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: -100,
  handler(options, input) {
    let output = input;

    // preserve trailing spaces
    output = output.replace(/ +$/gm, (spaces) => '&nbsp;'.repeat(spaces.length));

    return output;
  },
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 0,
  handler(options, input) {
    let output = toHTML(input, null, options);

    const domOutput = new DOMParser().parseFromString(output, 'text/html');
    output = domOutput.body.innerHTML.replace(/>\n</g, '><');

    return output;
  },
});

window.nextgenEditor.addHook('hookHTMLtoMarkdown', {
  weight: 0,
  handler(options, editor, input) {
    return toMarkdown(input);
  },
});

window.nextgenEditor.addHook('hookHTMLtoMarkdown', {
  weight: 100,
  handler(options, editor, input) {
    let output = input;

    // replace non-breaking spaces with normal ones
    // eslint-disable-next-line camelcase
    if (options.transformations?.nonbreaking_space) {
      output = output.replace(/\u00A0/g, ' ').replace(/&nbsp;/g, ' ');
    }

    // remove closing and openning bold elements
    output = output.replace(/\*\*\*\*/g, '');

    // add trailing line break
    output = output.replace(/(\n)*$/, '\n');

    return output;
  },
});
