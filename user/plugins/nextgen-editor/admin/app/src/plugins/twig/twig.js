import './twig.css';

const LiveRange = window.nextgenEditor.classes.engine.model.liverange.class;
const BlockAutoformatEditing = window.nextgenEditor.classes.autoformat.blockautoformatediting.class;

window.nextgenEditor.addPlugin('GravTwig', {
  init() {
    this.editor.model.schema.extend('$text', { allowAttributes: 'twig' });

    this.editor.model.schema.setAttributeProperties('twig', {
      isFormatting: true,
    });

    this.editor.conversion.attributeToElement({
      converterPriority: 'low',
      model: 'twig',
      view: 'twig',
    });

    const tags = [
      { open: '{{', close: '}}' },
      { open: '{%', close: '%}' },
      { open: '{#', close: '#}' },
    ];

    tags.forEach((tag) => {
      const openreg = tag.open.split('').map((s) => `\\${s}`).join('');
      const closereg = tag.close.split('').map((s) => `\\${s}`).join('');

      // eslint-disable-next-line no-new
      new BlockAutoformatEditing(this.editor, new RegExp(`(${openreg})((((?!(${closereg})).)|\\n)*)(${closereg})`), ({ match }) => {
        this.editor.model.change((writer) => {
          const blocks = Array.from(this.editor.model.document.selection.getSelectedBlocks());

          blocks.forEach((block) => {
            const start1 = writer.createPositionAt(block, match.index);
            const end1 = writer.createPositionAt(block, match.index + 2);

            const start2 = writer.createPositionAt(block, match.index + match[0].length - 2);
            const end2 = writer.createPositionAt(block, match.index + match[0].length);

            writer.setAttribute('twig', true, new LiveRange(start1, end1));
            writer.setAttribute('twig', true, new LiveRange(start2, end2));

            writer.removeSelectionAttribute('twig');
          });
        });

        return false;
      });
    });
  },
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 50,
  handler(options, input) {
    let output = input;

    // wrap twig tags
    const tags = [
      { open: '{{', close: '}}' },
      { open: '{%', close: '%}' },
      { open: '{#', close: '#}' },
    ];

    tags.forEach((tag) => {
      const openreg = tag.open.split('').map((s) => `\\${s}`).join('');
      const closereg = tag.close.split('').map((s) => `\\${s}`).join('');

      output = output.replace(new RegExp(`(${openreg})((((?!(${closereg})).)|\\n)*)(${closereg})`, 'gm'), (...args) => {
        if (args[7] >= 6 && args[8].substr(args[7] - 6, 6) === '<twig>') {
          return args[0];
        }
        return `<twig>${tag.open}</twig>${args[2]}<twig>${tag.close}</twig>`;
      });
    });

    output = output.replace(/<code>(((?!(<\/code>)).)|\n)*<\/code>/gm, (text) => text.replace(/<\/?twig>/gm, ''));

    return output;
  },
});
