const Image = window.nextgenEditor.classes.image.class;

const imageAttributes = [
  'data-style',
  'data-src',
  'sizes',
];

window.nextgenEditor.addPlugin('GravPreserveImage', {
  requires: [Image],
  init() {
    imageAttributes.forEach((attrName) => {
      this.editor.model.schema.extend('image', { allowAttributes: attrName });

      this.editor.conversion.for('upcast').attributeToAttribute({
        model: attrName,
        view: {
          name: 'img',
          key: attrName,
        },
      });

      this.editor.conversion.for('downcast').add((dispatcher) => {
        dispatcher.on(`attribute:${attrName}:image`, (evt, data, conversionApi) => {
          if (!conversionApi.consumable.consume(data.item, evt.name)) {
            return;
          }

          const viewWriter = conversionApi.writer;
          const figure = conversionApi.mapper.toViewElement(data.item);
          const figureChildren = [];

          [...figure.getChildren()].forEach((figureChild) => {
            figureChildren.push(figureChild);

            if (figureChild.is('element')) {
              figureChildren.push(...figureChild.getChildren());
            }
          });

          const img = figureChildren.find((viewChild) => viewChild.is('element', 'img'));

          const attributeKey = attrName !== 'data-style'
            ? attrName
            : 'style';

          viewWriter.setAttribute(attributeKey, data.attributeNewValue || '', img);
        });
      });
    });
  },
});
