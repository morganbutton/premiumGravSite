import './radios.css';

export default {
  render(args) {
    const { parent, widget, value, change } = args;
    const inputs = [];

    const values = typeof widget.values === 'function'
      ? widget.values(args)
      : widget.values;

    values.forEach((subValue) => {
      const line = document.createElement('div');
      line.classList.add('line');

      parent.appendChild(line);

      const input = document.createElement('input');

      input.type = 'radio';
      input.value = subValue.value;

      if (value === subValue.value) {
        input.checked = true;
      }

      line.addEventListener('click', () => {
        inputs.forEach((subInput) => {
          subInput.checked = input === subInput;
        });

        change(subValue.value);
      });

      inputs.push(input);
      line.appendChild(input);

      const label = document.createElement('span');
      label.innerHTML = subValue.label;

      line.appendChild(label);
    });
  },
};
