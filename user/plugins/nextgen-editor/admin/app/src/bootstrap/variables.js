window.nextgenEditor.variables = {};

window.nextgenEditor.addVariable = function addVariable(name, variable) {
  window.nextgenEditor.variables[name] = window.nextgenEditor.variables[name] || [];

  if (Array.isArray(variable)) {
    window.nextgenEditor.variables[name] = window.nextgenEditor.variables[name].concat(variable);
  } else {
    window.nextgenEditor.variables[name].push(variable);
  }
};

window.nextgenEditor.getVariable = function getVariable(name) {
  return window.nextgenEditor.variables[name] || [];
};
