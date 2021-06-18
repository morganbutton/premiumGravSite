import * as utils from '../utils';

const { isImage } = window.nextgenEditor.classes.image.utils;
const Command = window.nextgenEditor.classes.core.command.class;

export default class GravImageSrcCommand extends Command {
  refresh() {
    const element = this.editor.model.document.selection.getSelectedElement();

    this.isEnabled = isImage(element);

    if (isImage(element) && element.hasAttribute('data-src')) {
      this.value = decodeURIComponent(element.getAttribute('data-src'));
    } else {
      this.value = false;
    }
  }

  async execute(options) {
    const modelImage = this.editor.model.document.selection.getSelectedElement();

    const viewImage = this.editor.editing.mapper.toViewElement(modelImage);
    const domImage = this.editor.editing.view.domConverter.viewToDom(viewImage).querySelector('img');

    domImage.setAttribute('data-src', options.newValue);
    const newDomImage = await utils.convertImage(domImage);

    if (newDomImage) {
      utils.setAttributes(this.editor, newDomImage, modelImage);
    }
  }
}
