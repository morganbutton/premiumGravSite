window.nextgenEditor.addHook('hookOptions', (options) => {
  options.nextgenEditor.codeBlock = options.nextgenEditor.codeBlock || {};
  options.nextgenEditor.codeBlock.languages = options.nextgenEditor.codeBlock.languages || [];

  const plaintext = { language: 'plaintext', label: 'Plain text' };

  options.nextgenEditor.codeBlock.languages.push(
    { language: 'c', label: 'C' },
    { language: 'cs', label: 'C#' },
    { language: 'cpp', label: 'C++' },
    { language: 'css', label: 'CSS' },
    { language: 'diff', label: 'Diff' },
    { language: 'html', label: 'HTML' },
    { language: 'java', label: 'Java' },
    { language: 'javascript', label: 'JavaScript' },
    { language: 'php', label: 'PHP' },
    { language: 'python', label: 'Python' },
    { language: 'ruby', label: 'Ruby' },
    { language: 'typescript', label: 'TypeScript' },
    { language: 'xml', label: 'XML' },
    // end of default items
    { language: 'bash', label: 'Bash' },
    { language: 'json', label: 'JSON' },
    { language: 'sh', label: 'Shell' },
    { language: 'yaml', label: 'YAML' },
  );

  options.nextgenEditor.codeBlock.languages.sort((a, b) => (a.language > b.language ? 1 : -1));
  options.nextgenEditor.codeBlock.languages.unshift(plaintext);

  return options;
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 50,
  handler(options, input) {
    let output = input;

    // fix trailing line break in code blocks
    output = output.replace(/\n<\/code><\/pre>/gm, '</code></pre>');

    return output;
  },
});

window.nextgenEditor.addHook('hookHTMLtoMarkdown', {
  weight: 50,
  handler(options, editor, input) {
    let output = input;

    // remove default plaintext type for code block
    output = output.replace(/^```plaintext$/gm, '```');

    return output;
  },
});
