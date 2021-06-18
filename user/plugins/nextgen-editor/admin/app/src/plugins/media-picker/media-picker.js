import { insertImage } from '../image/utils';
import './media-picker.css';

const Command = window.nextgenEditor.classes.core.command.class;
const { $ } = window;
let INITIALIZED = false;

export default function showMediaPicker(callback) {
  document.querySelector('#ck-media-picker').callback = callback;
  document.querySelector('#ck-media-picker input[name="data[ck-media-picker]"]').value = '';
  document.querySelector('#ck-media-picker input[name="data[ck-media-picker]"]').click();
}

window.nextgenEditor.exports.showMediaPicker = showMediaPicker;

window.nextgenEditor.addHook('hookInit', () => {
  window.nextgenEditor.addButton('media-picker', {
    command: 'media-picker',
    icon: '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m13.187 4.045h-.01c-.83 0-1.5.66-1.5 1.49 0 .82.66 1.49 1.49 1.49.82-.01 1.49-.67 1.49-1.5h-.01c0-.83-.67-1.5-1.5-1.5-.01-.01-.01-.01-.01-.01z"/><path d="m23.415 3-2.425-2.42-.01-.01c-.38-.38-.89-.59-1.42-.59h-11.59-.01c-1.11 0-2 .89-2 2v7.27-.01c-.01.13.1.24.24.25.36 0 1.03.03 1.48.08.13.01.25-.09.27-.22 0-.02 0-.03 0-.04v-6.86c-.01-.28.22-.51.49-.51h10.87c.13 0 .25.05.35.14l2.122 2.122-.01-.01c.09.09.14.22.14.35v13.37c0 .27-.23.5-.5.5h-6.86-.01c-.13 0-.23.08-.25.21h-.01c-.08.49-.2.98-.37 1.45v-.01c-.05.12.01.26.14.31.02.01.05.01.08.01h7.73-.01c1.1 0 2-.9 2-2v-14.092-.01c0-.54-.22-1.04-.59-1.42z"/><path d="m13.831 9.4c-.12-.18-.35-.23-.52-.12-.05.02-.09.06-.12.11l-1.25 1.99h-.01c-.07.09-.05.22.04.3.38.36.73.76 1.04 1.2.04.06.12.1.2.1h7.07l-.01-.001c.1 0 .18-.09.18-.19 0-.04-.01-.08-.03-.11l-3.25-5.18-.01-.01c-.11-.18-.34-.23-.52-.12-.05.03-.09.07-.12.11l-1.81 2.9v-.01c-.06.08-.18.11-.26.05-.03-.02-.05-.04-.06-.06z"/><path d="m6.5 11h-.01c-3.59 0-6.5 2.91-6.5 6.5 0 3.58 2.91 6.5 6.5 6.5 3.58-.01 6.5-2.92 6.5-6.5-.01-3.59-2.92-6.5-6.5-6.51zm2.5 7.25h-1.5-.01c-.14 0-.25.11-.25.25v1.5c0 .41-.34.75-.75.75-.42 0-.75-.34-.75-.75v-1.5c0-.14-.12-.25-.25-.25h-1.5-.01c-.42-.01-.75-.34-.75-.75 0-.42.33-.75.75-.75h1.5-.01c.13 0 .25-.12.25-.25v-1.5c-.01-.42.33-.76.74-.76.41-.01.75.33.75.74v1.5c0 .13.11.24.25.24h1.5-.01c.41-.01.75.33.75.75 0 .41-.34.75-.75.75z"/></svg>',
    label: 'Media Picker',
  });
});

class GravMediaPickerCommand extends Command {
  execute() {
    const { dropzone } = window.Grav.default.Pages.Page.Media.PageMediaInstances;

    if (!dropzone) {
      // eslint-disable-next-line no-alert
      alert('You cannot add media files until you save the page. Just click \'Save\' on top');
      return;
    }

    showMediaPicker(async (imgSrc) => {
      await insertImage(this.editor, imgSrc);
    });
  }
}

window.nextgenEditor.addPlugin('GravMediaPickerCommand', {
  init() {
    this.editor.commands.add('media-picker', new GravMediaPickerCommand(this.editor));

    const unique = document.querySelector('#ck-media-picker [data-grav-mediapicker-unique-identifier]').dataset.gravMediapickerUniqueIdentifier;
    const modalSelector = `.remodal-mediapicker[data-remodal-unique-identifier="${unique}"]`;

    const { page } = document.querySelector('#ck-media-picker').dataset;
    const pageFilters = document.querySelector(`${modalSelector} .js__reset-pages-filter`);
    const headerActivePage = document.querySelector(`${modalSelector} .media-list-title .page-indicator`);
    const sidebarActivePage = document.querySelector(`${modalSelector} .pages-list-container .page-item[data-nav-id="${page}"] .row`);
    const emptyState = document.querySelector(`${modalSelector} #admin-media .empty-state`);
    const thumbsList = document.querySelector(`${modalSelector} .thumbs-list-container`);

    headerActivePage.innerHTML = page;
    pageFilters.classList.remove('hidden');

    if (sidebarActivePage) {
      sidebarActivePage.classList.add('active');
    }

    if (emptyState) {
      thumbsList.innerHTML += '<p class="card-item empty-space">No media found</p>';
      document.querySelector(`${modalSelector} #admin-media .empty-state`).remove();
    }

    if (!INITIALIZED) {
      $(document).on('closed', modalSelector, () => {
        const { callback } = document.querySelector('#ck-media-picker');
        const { value } = document.querySelector('#ck-media-picker input[name="data[ck-media-picker]"]');

        if (!value) {
          return;
        }

        callback(value);
      });

      INITIALIZED = true;
    }
  },
});
