import './select.css';

export default {
  render(args) {
    const { parent, widget, value, change } = args;

    const select = document.createElement('select');

    parent.appendChild(select);

    const values = typeof widget.values === 'function'
      ? widget.values(args)
      : widget.values;

    values.forEach((subValue) => {
      const option = document.createElement('option');

      option.value = subValue.value;
      option.innerHTML = subValue.label;

      if (value === subValue.value) {
        option.selected = true;
      }

      select.appendChild(option);
    });

    select.addEventListener('change', () => {
      change(select.options[select.selectedIndex].value);
    });
  },
};
