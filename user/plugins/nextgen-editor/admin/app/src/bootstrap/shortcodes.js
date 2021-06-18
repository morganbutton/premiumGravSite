window.nextgenEditor.shortcodePlugins = {};
window.nextgenEditor.shortcodes = {};

window.nextgenEditor.addShortcodePlugin = function addShortcodePlugin(name, plugin) {
  window.nextgenEditor.shortcodePlugins[name] = plugin;
};

window.nextgenEditor.addShortcode = function addShortcode(name, shortcode) {
  shortcode.realName = name;
  shortcode.name = name;

  if (!shortcode.type) {
    // eslint-disable-next-line no-console
    console.error('shortcode type is required: ', shortcode);
  }

  if (shortcode.parent) {
    const parent = window.nextgenEditor.shortcodes[shortcode.parent];

    if (!parent) {
      return;
    }

    shortcode.name = `${shortcode.parent}_${name}`;

    shortcode.parent = parent;
    parent.child = shortcode;
  }

  window.nextgenEditor.shortcodes[shortcode.name] = shortcode;
};
