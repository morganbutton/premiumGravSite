const textAttributes = [
  { tag: 'a', attribute: 'data-href', custom: [{ name: 'link', value: true }] },
];

window.nextgenEditor.addPlugin('GravPreserveText', {
  init() {
    textAttributes.forEach((item) => {
      this.editor.model.schema.extend('$text', { allowAttributes: item.attribute });

      this.editor.conversion.for('downcast').attributeToElement({
        model: item.attribute,
        view(attributeValue, { writer }) {
          const element = writer.createAttributeElement(item.tag, { [item.attribute]: attributeValue }, { priority: 5 });

          if (item.custom) {
            item.custom.forEach((custom) => {
              writer.setCustomProperty(custom.name, custom.value, element);
            });
          }

          return element;
        },
      });

      this.editor.conversion.for('upcast').attributeToAttribute({
        model: item.attribute,
        view: {
          name: item.tag,
          key: item.attribute,
        },
      });
    });
  },
});
