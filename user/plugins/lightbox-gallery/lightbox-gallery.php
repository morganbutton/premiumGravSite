<?php
namespace Grav\Plugin;

use Composer\Autoload\ClassLoader;
use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Page\Page;
use Grav\Common\Plugin;
use Grav\Common\Utils;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class LightboxGalleryPlugin
 * @package Grav\Plugin
 */
class LightboxGalleryPlugin extends Plugin
{
    protected $configuration;

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => [
                ['autoload', 100000], // TODO: Remove when plugin requires Grav >=1.7
                ['onPluginsInitialized', 0]
            ],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
        ];
    }

    /**
    * Composer autoload.
    *is
    * @return ClassLoader
    */
    public function autoload(): ClassLoader
    {
        return require __DIR__ . '/vendor/autoload.php';
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        $extension = $this->grav['uri']->extension();
        $allowed_extensions = [null, 'html','htm'];
        if ($this->isAdmin()) {
            $this->enable([
                'registerNextGenEditorPlugin' => ['registerNextGenEditorPluginShortcodes', 0],
            ]);
        }

        if ($this->isAdmin() || defined('GRAV_CLI') || !in_array($extension, $allowed_extensions)) {
            return;
        }

        // Enable the main events we are interested in
        $this->enable([
            'onTwigSiteVariables' => ['onTwigVariables', 0],
        ]);

        $this->configuration = $this->config();
    }

    /**
     * Initialize configuration
     */
    public function onTwigVariables(Event $e)
    {
        /** @var Page $page */
        $page = $e['page'] ?? $this->grav['page'] ?? null;

        if ($page && ($page instanceof PageInterface) && isset($page->header()->lightbox)) {
            if (is_array($page->header()->lightbox)) {
                $this->configuration['active'] = true;
                $this->configuration = Utils::arrayMergeRecursiveUnique($this->config(), $page->header()->lightbox);
            }
        }

        if ($this->configuration['active'] && $this->configuration['autoIncludeAssets']) {
            $this->addAssets();
        }

        $this->grav['twig']->twig_vars['lightbox_gallery'] = $this;
    }

    public function addAssets()
    {
        $this->grav['assets']->addCss('plugin://lightbox-gallery/css/glightbox.min.css');
        $this->grav['assets']->addJs('plugin://lightbox-gallery/js/glightbox.min.js', null, true, null, 'bottom');

        $options = json_encode($this->getOptions());
        $inline = "const lightbox = GLightbox({$options});";
        $this->grav['assets']->addInlineJs($inline, null, 'bottom');
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    protected function getOptions() {
        $options = [];

        $defaults = [
            'selector' => '.glightbox',
            'elements' => null,
            'skin' => 'clean',
            'openEffect' => 'zoom',
            'closeEffect' => 'zoom',
            'slideEffect' => 'slide',
            'moreText' => 'See more',
            'moreLength' => 60,
            'closeButton' => true,
            'touchNavigation' => true,
            'touchFollowAxis' => true,
            'keyboardNavigation' => true,
            'closeOnOutsideClick' => true,
            'startAt' => 0,
            'width' => '900px',
            'height' => '506px',
            'videosWidth' => '960px',
            'descPosition' => 'bottom',
            'loop' => false,
            'zoomable' => true,
            'draggable' => true,
            'dragToleranceX' => 40,
            'dragToleranceY' => 65,
            'dragAutoSnap' => false,
            'preload' => true,
            'autoplayVideos' => true,
            'autofocusVideos' => false,
        ];

        foreach ($defaults as $option => $default) {
            if (isset($this->configuration['options'][$option]) && $default !== $this->configuration['options'][$option]) {
                $options[$option] = $this->configuration['options'][$option];
            }
        }
        return $options;

    }

    /**
     * Initialize configuration
     */
    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes(__DIR__ . '/classes/shortcodes');
    }

    public function registerNextGenEditorPluginShortcodes($event) {
        $plugins = $event['plugins'];
        $plugins['js'][] = 'plugin://lightbox-gallery/nextgen-editor/shortcodes/lightbox/lightbox.js';
        $event['plugins']  = $plugins;
        return $event;
    }
}
