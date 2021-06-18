window.nextgenEditor.addPlugin('GravWords', {
  init() {
    const wordCountPlugin = this.editor.plugins.get('WordCount');
    const textarea = this.editor.sourceElement;

    const wordsBlockHTML = `
      <div class="nextgen-editor-words">
        <div class="words-line">Words: <span class="words-value">0</span></div>
        <div class="chars-line">Characters: <span class="chars-value">0</span></div>
      </div>
    `;

    const wordsBlock = new DOMParser().parseFromString(wordsBlockHTML, 'text/html').body.firstChild;
    textarea.parentNode.insertBefore(wordsBlock, textarea.nextSibling);

    wordCountPlugin.on('update', (evt, stats) => {
      wordsBlock.querySelector('.words-value').innerHTML = stats.words;
      wordsBlock.querySelector('.chars-value').innerHTML = stats.characters;
    });
  },
});
