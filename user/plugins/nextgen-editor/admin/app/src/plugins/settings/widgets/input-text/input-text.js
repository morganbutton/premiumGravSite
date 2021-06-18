import './input-text.css';

export default {
  supportMarkdown: 'inline',
  render(args) {
    const { parent, value, focused, widget, change } = args;

    const input = document.createElement('input');

    input.type = 'text';
    input.value = value;
    input.placeholder = widget.placeholder || '';

    input.addEventListener('input', (event) => {
      change(event.target.value, event);
    });

    parent.appendChild(input);

    if (focused) {
      const { caret } = focused;

      input.focus();
      input.setSelectionRange(caret, caret);
    }
  },
};
