import './checkbox.css';

export default {
  render(args) {
    const { parent, widget, value, change } = args;

    let realValue = value;

    if (widget.valueType === Number) {
      realValue = value === 1;
    }

    if (widget.valueType === String) {
      realValue = value === 'true';
    }

    const label = document.createElement('label');
    parent.appendChild(label);

    const input = document.createElement('input');

    input.type = 'checkbox';
    input.checked = realValue;

    input.addEventListener('input', () => {
      let newValue = input.checked;

      if (widget.valueType === Number) {
        newValue = +newValue;
      }

      if (widget.valueType === String) {
        newValue = `${newValue}`;
      }

      change(newValue);
    });

    label.appendChild(input);

    const text = document.createElement('span');

    text.innerHTML = typeof widget.label === 'function'
      ? widget.label(args)
      : widget.label;

    label.appendChild(text);
  },
};
