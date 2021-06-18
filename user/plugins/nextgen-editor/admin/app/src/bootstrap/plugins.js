window.nextgenEditor.plugins = {};

const Plugin = window.nextgenEditor.classes.core.plugin.class;

window.nextgenEditor.addPlugin = function addPlugin(name, plugin) {
  plugin.name = name;
  if (window.nextgenEditor.plugins[name]) {
    return;
  }

  class NextGenContentEditorPlugin extends Plugin {
    static get pluginName() {
      return name;
    }

    static get requires() {
      return plugin.requires || [];
    }
  }

  Object.keys(plugin).forEach((propName) => {
    if (propName === 'name' || propName === 'requires') {
      return;
    }

    if (plugin[propName].getter || plugin[propName].setter) {
      if (plugin[propName].getter) {
        Object.defineProperty(NextGenContentEditorPlugin.prototype, propName, {
          get() {
            return plugin[propName].getter.call(this);
          },
        });
      }

      if (plugin[propName].setter) {
        Object.defineProperty(NextGenContentEditorPlugin.prototype, propName, {
          set(value) {
            plugin[propName].setter.call(this, value);
          },
        });
      }
    } else {
      NextGenContentEditorPlugin.prototype[propName] = plugin[propName];
    }
  });

  window.nextgenEditor.plugins[name] = NextGenContentEditorPlugin;
};
