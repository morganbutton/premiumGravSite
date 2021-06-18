import GravImageSrcCommand from './imagesrccommand';

window.nextgenEditor.addPlugin('GravImageSrcEditing', {
  init() {
    this.editor.commands.add('imageSrc', new GravImageSrcCommand(this.editor));
  },
});
