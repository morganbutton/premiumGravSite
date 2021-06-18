import { toHTML, toMarkdown } from '../markdown';
import widgets from './widgets';
import './settings.css';

export default function showSettingsPopup({ title, domDisplayPoint, debounceDelay, attributes, currentAttributes, parentAttributes, childAttributes, changeAttributes, deleteItem }) {
  let debounceTimeout = null;
  let debounceLastTime = 0;

  const unchangedAttributes = { ...currentAttributes };
  const focusedAttribute = { name: '', caret: 0 };

  const domPopup = document.createElement('div');
  domPopup.classList.add('ck-settings-popup');
  domPopup.style.visibility = 'hidden';

  const domBackdrop = document.createElement('div');
  domBackdrop.classList.add('backdrop');
  domPopup.appendChild(domBackdrop);

  const domInside = document.createElement('div');
  domInside.classList.add('inside');
  domPopup.appendChild(domInside);

  const domTitle = document.createElement('div');
  domTitle.classList.add('popup-title');
  domTitle.innerHTML = title;
  domInside.appendChild(domTitle);

  const domAttributes = document.createElement('div');
  domAttributes.classList.add('attributes');
  domInside.appendChild(domAttributes);

  function changeAttributesWrapper(successCallback) {
    clearTimeout(debounceTimeout);

    let delay = debounceDelay - (Date.now() - debounceLastTime);

    if (delay < 0) {
      delay = 0;
    }

    debounceTimeout = setTimeout(() => {
      debounceLastTime = Date.now();

      changeAttributes(changeAttributesWrapper);

      if (successCallback) {
        successCallback();
      }
    }, delay);
  }

  function refreshDomAttributes() {
    domAttributes.innerHTML = '';

    Object.keys(attributes).forEach((attrName) => {
      const attribute = attributes[attrName];

      const widget = typeof attribute.widget === 'string'
        ? { type: attribute.widget }
        : attribute.widget;

      const argsForWidget = {
        attributes: currentAttributes,
        parentAttributes,
        childAttributes,
        widget,
      };

      if (widget.visible && !widget.visible(argsForWidget)) {
        return;
      }

      const domAttribute = document.createElement('div');
      domAttribute.classList.add('attribute', `attribute-${widget.type}`);
      domAttributes.appendChild(domAttribute);

      const domAttributeTitle = document.createElement('div');
      domAttributeTitle.classList.add('title');
      domAttributeTitle.innerHTML = `${attribute.title}:`;
      domAttribute.appendChild(domAttributeTitle);

      if (widgets[widget.type]) {
        const attrValue = widgets[widget.type].supportMarkdown
          ? toMarkdown(currentAttributes[attrName])
          : currentAttributes[attrName];

        widgets[widget.type].render({
          ...argsForWidget,
          parent: domAttribute,
          value: attrValue,
          focused: attrName === focusedAttribute.name
            ? focusedAttribute
            : false,
          change(newValue, event) {
            focusedAttribute.name = attrName;
            focusedAttribute.caret = (event && event.target && event.target.selectionStart) || 0;

            currentAttributes[attrName] = widgets[widget.type].supportMarkdown
              ? toHTML(newValue, widgets[widget.type].supportMarkdown)
              : newValue;

            changeAttributesWrapper(refreshDomAttributes);
          },
        });
      }
    });
  }

  refreshDomAttributes();

  const domButtons = document.createElement('div');
  domButtons.classList.add('buttons');
  domInside.appendChild(domButtons);

  const domButtonCancel = document.createElement('button');
  domButtonCancel.classList.add('cancel');
  domButtonCancel.innerHTML = 'Cancel';
  domButtons.appendChild(domButtonCancel);

  const domButtonSave = document.createElement('button');
  domButtonSave.classList.add('save');
  domButtonSave.innerHTML = 'Save';
  domButtons.appendChild(domButtonSave);

  const domButtonDelete = document.createElement('div');
  domButtonDelete.title = 'delete';
  domButtonDelete.classList.add('delete');
  domButtonDelete.innerHTML = '<svg fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>';
  domInside.appendChild(domButtonDelete);

  document.body.appendChild(domPopup);

  const rectDisplayPoint = domDisplayPoint.getBoundingClientRect();

  domInside.style.top = `${rectDisplayPoint.top}px`;
  domInside.style.left = `${rectDisplayPoint.left + rectDisplayPoint.width}px`;

  setTimeout(() => {
    const rectBody = document.body.getBoundingClientRect();
    const rectInside = domInside.getBoundingClientRect();

    if (rectInside.top + rectInside.height > rectBody.height) {
      let top = rectDisplayPoint.top + rectDisplayPoint.height - rectInside.height;
      top = top < 20 ? 20 : top;

      if (rectBody.height - rectInside.height < 40) {
        domInside.style.bottom = '20px';
      }

      domInside.style.top = `${top}px`;
    }

    if (rectInside.left + rectInside.width > rectBody.width) {
      domInside.style.left = `${rectDisplayPoint.left - rectInside.width}px`;
    }

    domPopup.style.visibility = null;
  });

  const ddelete = () => {
    document.body.removeChild(domPopup);
    deleteItem();
  };

  const cancelPopup = () => {
    let isChanged = false;

    document.body.removeChild(domPopup);

    Object.keys(currentAttributes).forEach((attrName) => {
      if (unchangedAttributes[attrName] !== currentAttributes[attrName]) {
        currentAttributes[attrName] = unchangedAttributes[attrName];
        isChanged = true;
      }
    });

    if (isChanged) {
      changeAttributesWrapper();
    }
  };

  const savePopup = () => {
    document.body.removeChild(domPopup);
  };

  domBackdrop.addEventListener('click', cancelPopup);
  domButtonDelete.addEventListener('click', ddelete);
  domButtonCancel.addEventListener('click', cancelPopup);
  domButtonSave.addEventListener('click', savePopup);
}

window.nextgenEditor.exports.showSettingsPopup = showSettingsPopup;
