/* eslint-disable no-underscore-dangle */
const View = window.nextgenEditor.classes.ui.view.class;
const ViewCollection = window.nextgenEditor.classes.ui.viewcollection.class;
const ButtonView = window.nextgenEditor.classes.ui.button.buttonview.class;
const LabeledFieldView = window.nextgenEditor.classes.ui.labeledfield.labeledfieldview.class;
const FocusCycler = window.nextgenEditor.classes.ui.focuscycler.class;
const { createLabeledInputText } = window.nextgenEditor.classes.ui.labeledfield.utils;
const submitHandler = window.nextgenEditor.classes.ui.bindings.submithandler;
const checkIcon = window.nextgenEditor.classes.core.theme.icons.check;
const cancelIcon = window.nextgenEditor.classes.core.theme.icons.cancel;
const KeystrokeHandler = window.nextgenEditor.classes.utils.keystrokehandler.class;
const FocusTracker = window.nextgenEditor.classes.utils.focustracker.class;

export default class GravSrcFormView extends View {
  constructor(locale) {
    super(locale);

    const { t } = this.locale;

    this.focusTracker = new FocusTracker();
    this.keystrokes = new KeystrokeHandler();
    this.labeledInput = this._createLabeledInputView();
    this.saveButtonView = this._createButton(t('Save'), checkIcon, 'ck-button-save');
    this.saveButtonView.type = 'submit';
    this.cancelButtonView = this._createButton(t('Cancel'), cancelIcon, 'ck-button-cancel', 'cancel');
    this._focusables = new ViewCollection();

    this._focusCycler = new FocusCycler({
      focusables: this._focusables,
      focusTracker: this.focusTracker,
      keystrokeHandler: this.keystrokes,
      actions: {
        focusPrevious: 'shift + tab',
        focusNext: 'tab',
      },
    });

    this.setTemplate({
      tag: 'form',
      attributes: {
        class: [
          'ck',
          'ck-text-alternative-form',
        ],
        tabindex: '-1',
      },
      children: [
        this.labeledInput,
        this.saveButtonView,
        this.cancelButtonView,
      ],
    });
  }

  render() {
    super.render();

    this.keystrokes.listenTo(this.element);
    submitHandler({ view: this });

    [this.labeledInput, this.saveButtonView, this.cancelButtonView]
      .forEach((v) => {
        this._focusables.add(v);
        this.focusTracker.add(v.element);
      });
  }

  _createButton(label, icon, className, eventName) {
    const button = new ButtonView(this.locale);

    button.set({
      label,
      icon,
      tooltip: true,
    });

    button.extendTemplate({
      attributes: {
        class: className,
      },
    });

    if (eventName) {
      button.delegate('execute').to(this, eventName);
    }

    return button;
  }

  _createLabeledInputView() {
    const { t } = this.locale;
    const labeledInput = new LabeledFieldView(this.locale, createLabeledInputText);

    labeledInput.label = t('Source file');
    labeledInput.fieldView.placeholder = t('Source file');

    return labeledInput;
  }
}
