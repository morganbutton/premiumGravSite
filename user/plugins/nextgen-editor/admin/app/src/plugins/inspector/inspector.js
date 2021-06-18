window.nextgenEditor.addHook('hookAfterEditorInit', (options, editor) => {
  if (process.env.NODE_ENV === 'development') {
    // eslint-disable-next-line global-require
    require('@ckeditor/ckeditor5-inspector').attach(editor);
  }
});
