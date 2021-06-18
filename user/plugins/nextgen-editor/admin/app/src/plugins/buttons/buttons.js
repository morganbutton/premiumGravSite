const Model = window.nextgenEditor.classes.ui.model.class;
const Collection = window.nextgenEditor.classes.utils.collection.class;
const ButtonView = window.nextgenEditor.classes.ui.button.buttonview.class;
const { createDropdown, addListToDropdown } = window.nextgenEditor.classes.ui.dropdown.utils;

const defaultIcon = '<svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><g><g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M100,110v-4325.8h861.3h861.3v287.1v287.1h-574.2H674.2V110v3751.6h574.2h574.2v287.1v287.1H961.3H100V110z"/><path d="M8177.3,4148.7v-287.1h574.2h574.2V110v-3751.6h-574.2h-574.2v-287.1v-287.1h861.3H9900V110v4325.8h-861.3h-861.3V4148.7z"/><path d="M4789.5,2500.7c-153.1-26.8-405.8-118.7-530.2-191.4c-153.1-90-365.6-308.2-442.1-451.7c-86.1-164.6-137.8-379-137.8-578c1.9-601,365.6-1008.7,1202-1339.9c258.4-103.3,369.4-160.8,513-262.2c222-157,335-356,348.4-612.5c23-419.2-218.2-719.7-660.4-823c-99.5-23-193.3-28.7-407.7-21.1c-327.3,11.5-557,63.2-826.9,189.5c-91.9,44-172.3,74.6-176.1,70.8c-9.6-11.5-164.6-482.4-164.6-499.6c0-24.9,212.5-122.5,375.2-174.2c262.2-82.3,545.5-114.8,916.8-103.4c382.8,11.5,537.8,45.9,803.9,176.1c273.7,134,474.7,327.3,593.4,574.2c90,183.7,120.6,336.9,135.9,652.7c11.5,222,7.7,285.2-19.1,380.9c-112.9,384.7-405.8,645-981.9,872.8c-256.5,99.5-612.5,287.1-727.3,379c-223.9,181.8-304.3,350.3-289,612.5c19.1,323.5,204.8,535.9,545.5,624c156.9,42.1,509.1,36.4,729.3-7.7c141.6-30.6,323.5-99.5,444.1-168.4c5.7-3.8,47.9,107.2,93.8,245c93.8,285.2,101.4,258.4-93.8,333c-273.7,105.3-407.7,128.2-784.8,134C5053.6,2516,4846.9,2510.2,4789.5,2500.7z"/></g></g></svg>';

window.nextgenEditor.addHook('hookOptions', (options) => {
  Object.keys(window.nextgenEditor.buttonGroups).forEach((groupName) => {
    options.nextgenEditor.toolbar.items.push(groupName);
  });

  Object.keys(window.nextgenEditor.buttons).forEach((name) => {
    const button = window.nextgenEditor.buttons[name];

    if (!button.group) {
      options.nextgenEditor.toolbar.items.push(name);
    }
  });

  return options;
});

window.nextgenEditor.addPlugin('GravCoreButtons', {
  init() {
    Object.keys(window.nextgenEditor.buttonGroups).forEach((groupName) => {
      const buttonGroup = window.nextgenEditor.buttonGroups[groupName];

      this.editor.ui.componentFactory.add(groupName, (locale) => {
        const dropdownView = createDropdown(locale);

        dropdownView.buttonView.set({
          label: this.editor.t(buttonGroup.label || ''),
          icon: buttonGroup.icon || defaultIcon,
          withText: buttonGroup.withText,
          isToggleable: true,
          tooltip: true,
        });

        const dropdownItems = new Collection();

        Object.keys(window.nextgenEditor.buttons).forEach((name) => {
          const button = window.nextgenEditor.buttons[name];

          const command = typeof button.command !== 'object'
            ? { name: button.command }
            : button.command;

          if (button.group === groupName) {
            dropdownItems.add({
              type: 'button',
              model: new Model({
                command,
                icon: button.icon,
                label: button.label,
                withText: true,
              }),
            });
          }
        });

        addListToDropdown(dropdownView, dropdownItems);

        dropdownView.on('execute', (event) => {
          this.editor.execute(event.source.command.name, event.source.command.params);
          this.editor.editing.view.focus();
        });

        return dropdownView;
      });
    });

    Object.keys(window.nextgenEditor.buttons).forEach((name) => {
      const button = window.nextgenEditor.buttons[name];

      if (!button.group) {
        this.editor.ui.componentFactory.add(name, (locale) => {
          const buttonView = new ButtonView(locale);

          const command = typeof button.command !== 'object'
            ? { name: button.command }
            : button.command;

          const ckCommand = this.editor.commands.get(command.name);

          buttonView.set({
            label: this.editor.t(button.label || ''),
            icon: button.icon || defaultIcon,
            withText: button.withText,
            isToggleable: true,
            tooltip: true,
          });

          buttonView.bind('isOn').to(ckCommand, 'value');
          buttonView.bind('isEnabled').to(ckCommand, 'isEnabled');

          buttonView.on('execute', () => {
            this.editor.execute(command.name, command.params);
            this.editor.editing.view.focus();
          });

          return buttonView;
        });
      }
    });
  },
});
