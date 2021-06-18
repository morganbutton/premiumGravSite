import ClassicEditor from 'ClassicEditor';

window.nextgenEditor.exports = {};

async function bindField(field) {
  const textarea = field.querySelector('textarea');
  const { runHook, runHookSync } = window.nextgenEditor;
  let { options } = JSON.parse(textarea.dataset.nextgenEditor);

  await runHook('hookInit');

  options = await runHook('hookOptions', [], options);
  const initialHTML = await runHook('hookMarkdowntoHTML', [options], textarea.value);

  options.nextgenEditor.extraPlugins = Object.values(window.nextgenEditor.plugins);

  const providers = [];
  options.nextgenEditor.mediaEmbed.extraProviders.forEach((provider) => {
    const regex = provider.url.match(/^\/(.*?)\/([gim]*)$/);
    providers.push({
      name: provider.name,
      url: regex ? new RegExp(regex[1], regex[2]) : new RegExp(provider.url),
      // eslint-disable-next-line no-unused-vars
      html: (match) => provider.html // eslint-disable-next-line  no-template-curly-in-string
        .replace('${match[0]}', match[0]) // eslint-disable-next-line  no-template-curly-in-string
        .replace('${match[1]}', match[1]) // eslint-disable-next-line  no-template-curly-in-string
        .replace('${match[2]}', match[2]), // eslint-disable-next-line  no-template-curly-in-string
    });
  });

  options.nextgenEditor.mediaEmbed.extraProviders = providers;

  await runHook('hookBeforeEditorInit', [options]);

  ClassicEditor
    .create(textarea, {
      ...options.nextgenEditor,
      initialData: initialHTML,
    })
    .then(async (editor) => {
      field.classList.remove('loading');
      window.nextgenEditor.editors.push(editor);

      // Backward compatibility pre multiple-instances support: editor = first editor found
      if (!window.nextgenEditor.editor) {
        window.nextgenEditor.editor = editor;
      }

      await runHook('hookAfterEditorInit', [options, editor]);

      editor.model.document.on('change:data', async () => {
        await runHook('hookOnChange', [options, editor]);
      });

      textarea.form.addEventListener('submit', () => {
        textarea.value = runHookSync('hookHTMLtoMarkdown', [options, editor], textarea.value);
      });
    })
    .catch((err) => {
      // eslint-disable-next-line no-console
      console.error(err);
    });
}

const registerFields = () => {
  const fields = document.querySelectorAll('.nextgen-editor-form');
  window.nextgenEditor.editors = [];

  if (!fields.length) {
    return;
  }

  fields.forEach((field) => bindField(field));
};

if (document.readyState !== 'complete') {
  document.addEventListener('readystatechange', () => {
    if (document.readyState === 'complete') {
      registerFields();
    }
  });
} else {
  registerFields();
}
