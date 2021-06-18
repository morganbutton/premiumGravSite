<?php
namespace Grav\Plugin;

use Grav\Common\Utils;
use Grav\Common\Plugin;
use Grav\Common\User\Interfaces\UserInterface;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class NextGenEditorPlugin
 * @package Grav\Plugin
 */
class NextGenEditorPlugin extends Plugin
{

    protected $configs;

    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
            'onAdminListContentEditors' => ['onAdminListContentEditors', 0],
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {

            $this->getConfigs();
            /** @var UserInterface $user */
            $user = $this->grav['user'];

            if (method_exists($user, 'getContentEditor')) {
                // Preferred 1.7+ FlexUsers approach
                $markdown_editor = $user->getContentEditor();
            } else {
                // Grav 1.6 compatibility
                $markdown_editor = $user->content_editor ?? 'default';
            }

            if(($this->configs['default_for_all'] && $markdown_editor === 'default') || $markdown_editor === 'nextgen-editor') {
                // Enable the main event we are interested in
                $this->enable([
                    'onAdminTwigTemplatePaths' => ['onAdminTwigTemplatePaths', -10],
                    'onAssetsInitialized' => ['onAssetsInitialized', 0],
                ]);
            }
        }
    }

    public function getConfigs()
    {
        $this->configs = $this->config->get('plugins.nextgen-editor');
    }

    public function getAdminRoute()
    {
        return $this->config->get('plugins.admin.route');
    }

    public function onAssetsInitialized()
    {
        if (!$this->isAdmin()) {
            return;
        }

        $assets = $this->grav['assets'];
        $isPages = Utils::startsWith($this->grav['uri']->path(), $this->getAdminRoute() . '/pages/');
        $event = new Event([ 'enabled' => false ]);

        $this->grav->fireEvent('nextgen-editor.load', $event);

        if ($isPages || $event['enabled']) {
            $assets->addCss('plugins://nextgen-editor/admin/custom.css', 10);
            $assets->addJs('plugins://nextgen-editor/vendor/build/ckeditor.js', 10);

            if ($this->configs['env'] !== 'development') {
                $assets->addCss('plugin://nextgen-editor/admin/app/dist/css/app.css');
                $assets->addJs('plugin://nextgen-editor/admin/app/dist/js/app.js');
            } else {
                $assets->addJs('http://' . $this->configs['dev_host'] . ':' . $this->configs['dev_port'] . '/js/app.js');
            }

            $plugins = ['js' => [], 'css' => []];
            $event = new Event(['plugins' => &$plugins]);
            $this->grav->fireEvent('registerNextGenEditorPlugin', $event);

            foreach ($plugins['css'] as $path) {
                $assets->addCss($path);
            }
            foreach ($plugins['js'] as $path) {
                $assets->addJs($path);
            }
        }
    }

    // Custom admin template overriding
    public function onAdminTwigTemplatePaths($event)
    {
        $event['paths'] = array_merge($event['paths'], [__DIR__ . '/admin/templates']);

        return $event;
    }

    // New Admin 1.10 event to add a custom editor to the list of available editors
    public function onAdminListContentEditors($event)
    {
        $options = $event['options'];
        $options['nextgen-editor'] = 'NextGen Content Editor (WYSIWYM Editor)';
        $event['options']  = $options;
        return $event;
    }
}
