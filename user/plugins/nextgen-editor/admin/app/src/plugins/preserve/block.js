const blockTags = [
  'div',
];

window.nextgenEditor.addPlugin('GravPreserveBlock', {
  init() {
    const fromPlugins = window.nextgenEditor.getVariable('preserveBlockTags');

    blockTags.concat(fromPlugins)
      .filter((value, index, self) => self.indexOf(value) === index)
      .forEach((tagName) => {
        const realTagName = tagName.replace(/_reserved$/, '');

        this.editor.model.schema.register(tagName, {
          isLimit: true,
          allowWhere: '$block',
          allowContentOf: '$root',
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
            return writer.createContainerElement(realTagName, modelElement.getAttributes());
          },
        });
      });
  },
});
