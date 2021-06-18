window.nextgenEditor.addHook('hookOnChange', (options, editor) => {
  editor.sourceElement.value = Math.random();
});
