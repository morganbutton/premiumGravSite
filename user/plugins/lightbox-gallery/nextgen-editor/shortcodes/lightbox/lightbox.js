window.nextgenEditor.addShortcode('lightbox', {
  type: 'block',
  plugin: 'shortcode-core',
  title: 'Lightbox',
  button: {
    label: 'Lightbox',
    icon: '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10.168 19.787l-.01-.01c-.08-.09-.1-.21-.04-.3v-.01c1.63-2.57.88-5.98-1.68-7.62a5.522 5.522 0 00-7.62 1.67 5.512 5.512 0 001.67 7.61 5.51 5.51 0 005.92 0h-.01c.09-.07.21-.05.3.02l2.5 2.5-.01-.01c.39.39 1.02.39 1.41 0 .39-.4.39-1.03 0-1.42zm-4.67.24l-.01-.001a3.506 3.506 0 01-3.5-3.51c0-1.94 1.56-3.5 3.5-3.5 1.93 0 3.5 1.56 3.49 3.5v-.01c0 1.93-1.57 3.5-3.5 3.5zM14.68 5.538h-.01c0-.83-.67-1.5-1.5-1.5-.83-.01-1.5.66-1.5 1.49-.01.82.66 1.49 1.49 1.49l-.01-.001c.82 0 1.49-.67 1.49-1.5z"/><path d="M23.415 3L20.99.58c-.38-.38-.89-.59-1.42-.59H7.97c-1.11 0-2 .89-2 2v7.26h-.001c-.01.13.1.24.24.24l-.01-.01c.48.01.97.08 1.45.2l-.01-.01c.12.03.26-.04.29-.17V2.45c-.01-.28.22-.51.49-.51h10.87c.13 0 .25.05.35.14l2.127 2.12-.01-.01a.5.5 0 01.14.35v13.37c0 .27-.23.5-.5.5h-8.62v-.001c-.11 0-.2.06-.23.16v-.01c-.12.34-.25.67-.42 1v-.01c-.05.1-.02.22.06.3 0 0 .29.3.4.4l-.01-.01c.07.07.18.12.29.12h9-.01c1.1 0 2-.9 2-2V4.26c0-.54-.22-1.04-.59-1.42z"/><path d="M11.588 12.3c.11.15.23.32.33.48.07.13.21.21.37.21h8.01l-.01-.001c.1 0 .18-.09.18-.19 0-.04-.01-.08-.03-.11l-3.24-5.19-.01-.01a.374.374 0 00-.52-.12c-.05.03-.09.07-.12.11l-1.81 2.9v-.01c-.06.08-.18.11-.26.05a.17.17 0 01-.06-.06l-.65-1.04a.378.378 0 00-.52-.12c-.05.02-.09.06-.12.11l-1.63 2.606h-.01c-.06.09-.05.2.01.29z"/></svg>',
  },
  attributes: {
    image: {
      type: String,
      title: 'Image',
      widget: 'input-text',
      default: '',
    },
    video: {
      type: String,
      title: 'Video',
      widget: 'input-text',
      default: '',
    },
    class: {
      type: String,
      title: 'Class',
      widget: 'input-text',
      default: '',
    },
    gallery: {
      type: String,
      title: 'Gallery',
      widget: 'input-text',
      default: '',
    },
    title: {
      type: String,
      title: 'Title',
      widget: 'input-text',
      default: '',
    },
    desc: {
      type: String,
      title: 'Description',
      widget: 'input-text',
      default: '',
    },
    descPosition: {
      type: String,
      title: 'Description Position',
      widget: {
        type: 'radios',
        values: [
          { value: 'top', label: 'Top' },
          { value: 'bottom', label: 'Bottom' },
          { value: 'left', label: 'Left' },
          { value: 'right', label: 'Right' },
        ],
      },
      default: 'bottom',
    },
    effect: {
      type: String,
      title: 'Effect',
      widget: 'input-text',
      default: '',
    },
    width: {
      type: String,
      title: 'Width',
      widget: 'input-text',
      default: '',
    },
    height: {
      type: String,
      title: 'Width',
      widget: 'input-text',
      default: '',
    },
    zoomable: {
      type: String,
      title: 'Zoomable',
      widget: {
        type: 'radios',
        values: [
          { value: 'true', label: 'True' },
          { value: 'false', label: 'False' },
        ],
      },
      default: 'true',
    },
    draggable: {
      type: String,
      title: 'Draggable',
      widget: {
        type: 'radios',
        values: [
          { value: 'true', label: 'True' },
          { value: 'false', label: 'False' },
        ],
      },
      default: 'true',
    },
  },
  titlebar({attributes }) {
    return []
      .concat([
        attributes.image ? `image: <strong>${attributes.image}</strong>` : null,
        attributes.title ? `title: <strong>${attributes.title}</strong>` : null,
      ])
      .filter((item) => !!item)
      .join(', ');
  },
  content() {
    return `<div class="sc-ligthbox">{{content_editable}}</div>`;
  },
});

