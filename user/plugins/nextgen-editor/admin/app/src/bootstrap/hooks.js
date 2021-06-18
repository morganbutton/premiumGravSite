window.nextgenEditor.hooks = {};

window.nextgenEditor.addHook = function addHook(name, handler) {
  window.nextgenEditor.hooks[name] = window.nextgenEditor.hooks[name] || [];

  if (typeof handler === 'function') {
    window.nextgenEditor.hooks[name] = window.nextgenEditor.hooks[name].concat({ handler });
  } else {
    window.nextgenEditor.hooks[name] = window.nextgenEditor.hooks[name].concat(handler);
  }
};

function getHookHandlers(name) {
  const handlers = window.nextgenEditor.hooks[name] || [];

  handlers.sort((a, b) => {
    const aweight = a.weight || 0;
    const bweight = b.weight || 0;
    if (aweight < bweight) return -1;
    if (aweight > bweight) return 1;
    return 0;
  });

  return handlers;
}

window.nextgenEditor.runHook = async (name, args, input) => {
  let output = input;

  for (const item of getHookHandlers(name)) {
    output = await item.handler(...(args || []), output);
  }

  return output;
};

window.nextgenEditor.runHookSync = (name, args, input) => {
  let output = input;

  getHookHandlers(name).forEach((item) => {
    output = item.handler(...(args || []), output);
  });

  return output;
};
