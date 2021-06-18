window.nextgenEditor.buttons = {};
window.nextgenEditor.buttonGroups = {};

window.nextgenEditor.addButton = function addButton(name, button) {
  window.nextgenEditor.buttons[name] = button;
};

window.nextgenEditor.addButtonGroup = function addButtonGroup(groupName, buttonGroup) {
  window.nextgenEditor.buttonGroups[groupName] = buttonGroup;
};
