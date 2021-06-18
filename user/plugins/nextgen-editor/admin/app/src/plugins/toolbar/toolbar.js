window.nextgenEditor.addHook('hookOptions', (options) => {
  // sticky toolbar offset top
  if (options.nextgenEditor.toolbar.sticky) {
    options.nextgenEditor.toolbar.viewportTopOffset = 67;
  }

  return options;
});

window.nextgenEditor.addHook('hookAfterEditorInit', (options, editor) => {
  const scrollableElement = document.querySelector('.content-wrapper .simplebar-content-wrapper') || document.querySelector('.content-wrapper .gm-scroll-view');

  if (options.nextgenEditor.toolbar.sticky) {
    if (scrollableElement) {
      editor.ui.view.stickyPanel.listenTo(scrollableElement, 'scroll', () => {
        // eslint-disable-next-line no-underscore-dangle
        editor.ui.view.stickyPanel._checkIfShouldBeSticky();
      });
    }
  } else {
    // eslint-disable-next-line no-underscore-dangle
    editor.ui.view.stickyPanel._checkIfShouldBeSticky = () => {};
  }
});
