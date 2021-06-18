/* eslint-disable no-underscore-dangle */
import GravSrcFormView from './ui/srcformview';

const ButtonView = window.nextgenEditor.classes.ui.button.buttonview.class;
const ContextualBalloon = window.nextgenEditor.classes.ui.panel.balloon.contextualballoon.class;
const clickOutsideHandler = window.nextgenEditor.classes.ui.bindings.clickoutsidehandler;
const { repositionContextualBalloon, getBalloonPositionData } = window.nextgenEditor.classes.image.ui.utils;
const { getSelectedImageWidget } = window.nextgenEditor.classes.image.utils;
const srcIcon = window.nextgenEditor.classes.core.theme.icons.pencil;

window.nextgenEditor.addPlugin('GravImageSrcUI', {
  requires: [ContextualBalloon],
  init() {
    this._createButton();
    this._createForm();
  },
  destroy() {
    super.destroy();
    this._form.destroy();
  },
  _createButton() {
    const { editor } = this;
    const { t } = editor;

    editor.ui.componentFactory.add('imageSrc', (locale) => {
      const command = editor.commands.get('imageSrc');
      const view = new ButtonView(locale);

      view.set({
        label: t('Change image source file'),
        icon: srcIcon,
        tooltip: true,
      });

      view.bind('isEnabled').to(command, 'isEnabled');

      this.listenTo(view, 'execute', () => {
        this._showForm();
      });

      return view;
    });
  },
  _createForm() {
    const { editor } = this;
    const { view } = editor.editing;
    const viewDocument = view.document;

    this._balloon = this.editor.plugins.get('ContextualBalloon');
    this._form = new GravSrcFormView(editor.locale);
    this._form.render();

    this.listenTo(this._form, 'submit', () => {
      editor.execute('imageSrc', {
        newValue: this._form.labeledInput.fieldView.element.value,
      });

      this._hideForm(true);
    });

    this.listenTo(this._form, 'cancel', () => {
      this._hideForm(true);
    });

    this._form.keystrokes.set('Esc', (data, cancel) => {
      this._hideForm(true);
      cancel();
    });

    this.listenTo(editor.ui, 'update', () => {
      if (!getSelectedImageWidget(viewDocument.selection)) {
        this._hideForm(true);
      } else if (this._isVisible) {
        repositionContextualBalloon(editor);
      }
    });

    clickOutsideHandler({
      emitter: this._form,
      activator: () => this._isVisible,
      contextElements: [this._balloon.view.element],
      callback: () => this._hideForm(),
    });
  },
  _showForm() {
    if (this._isVisible) {
      return;
    }

    const { editor } = this;
    const command = editor.commands.get('imageSrc');
    const { labeledInput } = this._form;

    if (!this._isInBalloon) {
      this._balloon.add({
        view: this._form,
        position: getBalloonPositionData(editor),
      });
    }

    labeledInput.fieldView.value = command.value || '';
    labeledInput.fieldView.element.value = command.value || '';

    this._form.labeledInput.fieldView.select();
  },
  _hideForm(focusEditable) {
    if (!this._isInBalloon) {
      return;
    }

    if (this._form.focusTracker.isFocused) {
      this._form.saveButtonView.focus();
    }

    this._balloon.remove(this._form);

    if (focusEditable) {
      this.editor.editing.view.focus();
    }
  },
  _isVisible: {
    getter() {
      return this._balloon.visibleView === this._form;
    },
  },
  _isInBalloon: {
    getter() {
      return this._balloon.hasView(this._form);
    },
  },
});
