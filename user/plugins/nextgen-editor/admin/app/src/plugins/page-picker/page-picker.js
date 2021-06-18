import './page-picker.css';

const Command = window.nextgenEditor.classes.core.command.class;
const { $ } = window;
let INITIALIZED = false;

export default function showPagePicker(path, callback) {
  const parentsField = window.Grav.default.Forms.Fields.ParentsField;
  const instance = parentsField && parentsField.Instance && parentsField.Instance['data[page-picker]-page-picker'];

  document.querySelector('#page-picker-button + input[data-field-name="route"]').value = path;

  if (instance) {
    instance.finder.config.defaultPath = path;
  }

  document.querySelector('#page-picker-modal').callback = callback;
  document.querySelector('#page-picker-button').click();
}

window.nextgenEditor.exports.showPagePicker = showPagePicker;

window.nextgenEditor.addHook('hookInit', () => {
  window.nextgenEditor.addButton('page-picker', {
    command: 'page-picker',
    icon: '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m20 7.5c0-.56-.45-1-1-1h-7-.01c-.56 0-1 .44-1 1 0 .55.44 1 1 .99h7v-.001c.55-.01.99-.45.99-1z"/><path d="m12.5 11h-.01c-.56 0-1 .44-1 1 0 .55.44 1 1 .99h4l-.01-.001c.55 0 1-.45 1-1 0-.56-.45-1-1-1.01z"/><path d="m23.414 3-2.42-2.42-.01-.01c-.38-.38-.89-.59-1.42-.59h-11.59-.01c-1.11 0-2 .89-2 2v7.27-.01c-.01.13.1.24.24.25.36 0 1.03.03 1.48.08.13.01.25-.09.27-.22 0-.02 0-.03 0-.04v-6.86c-.01-.28.22-.51.49-.51h10.87c.13 0 .25.05.35.14l2.122 2.122-.01-.01c.09.09.14.22.14.35v13.37c0 .27-.23.5-.5.5h-6.86-.01c-.13 0-.23.09-.25.21h-.01c-.08.49-.2.98-.37 1.45v-.01c-.05.12.01.26.14.31.02.01.05.01.08.01h7.73l-.01-.001c1.1 0 2-.9 2-2v-14.091-.01c0-.54-.22-1.04-.59-1.42z"/><path d="m6.5 11h-.01c-3.59 0-6.5 2.91-6.5 6.5 0 3.58 2.91 6.5 6.5 6.5 3.58-.01 6.5-2.92 6.5-6.5-.01-3.59-2.92-6.5-6.5-6.51zm2.5 7.25h-1.5-.01c-.14 0-.25.11-.25.25v1.5c0 .41-.34.75-.75.75-.42 0-.75-.34-.75-.75v-1.5c0-.14-.12-.25-.25-.25h-1.5-.01c-.42-.01-.75-.34-.75-.75 0-.42.33-.75.75-.75h1.5-.01c.13 0 .25-.12.25-.25v-1.5c-.01-.42.33-.76.74-.76.41-.01.75.33.75.74v1.5c0 .13.11.24.25.24h1.5-.01c.41-.01.75.33.75.75 0 .41-.34.75-.75.75z"/></svg>',
    label: 'Page Picker',
  });
});

class GravPagePickerCommand extends Command {
  execute() {
    showPagePicker('', (page) => {
      this.editor.model.change((modelWriter) => {
        const textNode = modelWriter.createText(page.name);
        modelWriter.insert(textNode, this.editor.model.document.selection.getFirstPosition());
        modelWriter.setSelection(modelWriter.createRangeOn(textNode));

        this.editor.execute('link', page.value);
      });
    });
  }
}


window.nextgenEditor.addPlugin('GravPagePickerCommand', {
  init() {
    this.editor.commands.add('page-picker', new GravPagePickerCommand(this.editor));

    if (!INITIALIZED) {
      document.querySelector('#page-picker-modal-submit').addEventListener('click', () => {
        const { callback } = document.querySelector('#page-picker-modal');
        const parents = $('#page-picker-modal').data('parents');

        // eslint-disable-next-line no-underscore-dangle
        const page = parents.finder.findLastActive().item[0]._item;

        callback(page);
      });

      INITIALIZED = true;
    }
  },
});
