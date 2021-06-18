import * as utils from '../utils';

const ImageUploadCommand = window.nextgenEditor.classes.image.imageupload.imageuploadcommand.class;
let INITIALIZED = false;

window.nextgenEditor.addPlugin('GravImageUpload', {
  init() {
    const { dropzone } = window.Grav.default.Pages.Page.Media.PageMediaInstances;
    const mediaContainer = window.Grav.default.Pages.Page.Media.PageMediaInstances.container;

    if (!dropzone) {
      return;
    }

    if (!INITIALIZED) {
      // drag&drop image from dropzone to nextgen-editor
      mediaContainer.delegate('.dz-preview', 'dragstart', (event) => {
        const filename = event.currentTarget.querySelector('[data-dz-name]').innerText;
        event.originalEvent.dataTransfer.setData('nextgen-file', filename);
      });

      // click insert button of image in dropzone and insert this image into nextgen-editor
      mediaContainer.delegate('[data-dz-insert]', 'click', async (event) => {
        const filename = event.currentTarget.parentNode.querySelector('[data-dz-name]').innerText;
        await utils.insertImage(this.editor, filename);
      });

      // drag&drop image from desktop to dropzone and insert this image into nextgen-editor
      dropzone.on('thumbnail', (file) => {
        if (file.nextgenEditor) {
          file.nextgenEditor.model.change((writer) => {
            file.modelTempImage = writer.createElement('image', { src: file.dataURL });
            file.nextgenEditor.model.insertContent(file.modelTempImage, file.nextgenEditor.model.document.selection.focus);
          });
        }
      });

      dropzone.on('success', async (file, resp) => {
        if (file.nextgenEditor) {
          resp.filename = resp.filename.replace(/(@[0-9]+x)(\.[^.]+)$/, '$2');

          const position = file.nextgenEditor.model.createPositionAfter(file.modelTempImage);
          await utils.insertImage(file.nextgenEditor, resp.filename, position);

          file.nextgenEditor.model.change((modelWriter) => {
            modelWriter.remove(file.modelTempImage);
          });
        }
      });

      INITIALIZED = true;
    }

    // drop the image into the proper place
    this.editor.editing.view.document.on('drop', async (event, data) => {
      const filename = data.dataTransfer.getData('nextgen-file');

      if (filename) {
        event.stop();
        data.preventDefault();

        const position = this.editor.editing.mapper.toModelPosition(data.dropRange.start);
        await utils.insertImage(this.editor, filename, position);
      }
    });
  },
});

// click on insert image button in the toolbar
ImageUploadCommand.prototype.execute = function execute(options) {
  const { dropzone } = window.Grav.default.Pages.Page.Media.PageMediaInstances;

  if (!dropzone) {
    // eslint-disable-next-line no-alert
    alert('You cannot add media files until you save the page. Just click \'Save\' on top');
    return;
  }

  const filesToUpload = !Array.isArray(options.file)
    ? [options.file]
    : options.file;

  filesToUpload.forEach((file) => {
    file.nextgenEditor = this.editor;
    dropzone.addFile(file);
  });
};
