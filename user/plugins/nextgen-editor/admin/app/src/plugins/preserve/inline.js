import { svgTags } from './svg';

const inlineTags = [
  'span',
  'mark',
  'a_reserved',
];

window.nextgenEditor.addPlugin('GravPreserveInline', {
  init() {
    const fromPlugins = window.nextgenEditor.getVariable('preserveInlineTags');

    inlineTags
      .concat(fromPlugins)
      .filter((value, index, self) => self.indexOf(value) === index)
      .forEach((tagName) => {
        const realTagName = tagName.replace(/_reserved$/, '');

        this.editor.model.schema.register(tagName, {
          isLimit: true,
          allowWhere: '$text',
          allowContentOf: '$block',
        });

        // eslint-disable-next-line consistent-return
        this.editor.model.schema.addAttributeCheck((context) => {
          if (context.endsWith(tagName)) {
            return true;
          }
        });

        this.editor.conversion.for('upcast').elementToElement({
          view: tagName,
          model(viewElement, { writer }) {
            return writer.createElement(tagName, viewElement.getAttributes());
          },
        });

        this.editor.conversion.for('downcast').elementToElement({
          model: tagName,
          view(modelElement, { writer }) {
            const attributes = [...modelElement.getAttributes()];

            if (svgTags.includes(realTagName)) {
              attributes.push(['xmlns', 'http://www.w3.org/2000/svg']);
            }

            return writer.createContainerElement(realTagName, attributes);
          },
        });
      });
  },
});
