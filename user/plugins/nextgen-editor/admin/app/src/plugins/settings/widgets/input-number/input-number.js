import './input-number.css';

export default {
  render(args) {
    const { parent, widget, value, change } = args;

    const input = document.createElement('input');

    input.type = 'number';

    input.min = typeof widget.min === 'function'
      ? widget.min(args)
      : widget.min || 0;

    input.max = typeof widget.max === 'function'
      ? widget.max(args)
      : widget.max || 1000;

    input.step = typeof widget.step === 'function'
      ? widget.step(args)
      : widget.step || 1;

    input.value = value;

    input.addEventListener('input', (event) => {
      change(+event.target.value);
    });

    parent.appendChild(input);
  },
};
