import './table.css';

const TableCellPropertiesUI = window.nextgenEditor.classes.table.tablecellproperties.tablecellpropertiesui.class;

// eslint-disable-next-line no-underscore-dangle
const _createPropertiesViewOriginal = TableCellPropertiesUI.prototype._createPropertiesView;

// eslint-disable-next-line no-underscore-dangle
TableCellPropertiesUI.prototype._createPropertiesView = function _createPropertiesView() {
  const { model } = this.editor;

  const view = _createPropertiesViewOriginal.apply(this);

  view.on('change:horizontalAlignment', (...args) => {
    // eslint-disable-next-line no-underscore-dangle
    const ranges = model.document.selection._ranges;

    const firstItemInRange = ranges.length === 1
      ? ranges[0]
      : null;

    this.editor.execute('selectTableColumn');

    // eslint-disable-next-line no-underscore-dangle
    this._getPropertyChangeCallback('tableCellHorizontalAlignment').apply(this, args);

    if (firstItemInRange) {
      model.change((writer) => {
        writer.setSelection(firstItemInRange);
      });
    }
  });

  return view;
};

window.nextgenEditor.addHook('hookOptions', (options) => {
  options.nextgenEditor.table = options.nextgenEditor.table || {};
  options.nextgenEditor.table.contentToolbar = options.nextgenEditor.table.contentToolbar || [];

  options.nextgenEditor.table.contentToolbar.push(
    'tableColumn',
    'tableRow',
    'mergeTableCells',
    'tableCellProperties',
  );

  return options;
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: -50,
  handler(options, input) {
    let output = input;

    // fix issue with tables without header
    const rows = output.split('\n');
    const newRows = [];

    rows.forEach((row, index) => {
      if (row.trim().match(/^\|.*\|$/) && (!rows[index - 1] || !rows[index - 1].trim().match(/^\|.*\|$/)) && (!rows[index + 1] || !rows[index + 1].trim().match(/^\| *:?-.*\|$/))) {
        const colsCount = row.match(/\|/g).length - 1;

        newRows.push(`|${new Array(colsCount).fill('').join('|')}|`);
        newRows.push(`|${new Array(colsCount).fill(' --- ').join('|')}|`);
      }

      newRows.push(row);
    });

    output = newRows.join('\n');

    return output;
  },
});

window.nextgenEditor.addHook('hookMarkdowntoHTML', {
  weight: 50,
  handler(options, input) {
    let output = input;

    // fix issue with table without header
    output = output.replace(/<thead>\n<tr>(\n<th><\/th>)*\n<\/tr>\n<\/thead>\n/gm, '');

    return output;
  },
});

window.nextgenEditor.addHook('hookHTMLtoMarkdown', {
  weight: -50,
  handler(options, editor, input) {
    let output = input;

    // fix table without header
    output = output.replace(/(<figure class="table"><table>)(<tbody>(((?!(<\/figure>)).)|\n)*<\/figure>)/gm, '$1<thead><tr></tr></thead>$2');

    // fix table alignment
    output = output.replace(/<th ([^>]*text-align:(left|center|right);[^>]*)>/gm, '<th align="$2" $1>');

    // fix table figure
    output = output.replace(/<figure class="table">((((?!(<\/figure>)).)|\n)*)<\/figure>/gm, '$1');

    return output;
  },
});
