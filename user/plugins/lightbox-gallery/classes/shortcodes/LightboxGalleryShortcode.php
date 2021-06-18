<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class LightboxGalleryShortcode extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('lightbox', function(ShortcodeInterface $sc) {

            return $this->twig->processTemplate(
                'partials/lightbox.html.twig',
                [
                    'page'          => $this->grav['page'],
                    'content'       => $sc->getContent(),
                    'gallery'       => $sc->getParameter('gallery', md5($sc->getParameter('image'))),
                    'image'         => $sc->getParameter('image'),
                    'video'         => $sc->getParameter('video'),
                    'class'         => $sc->getParameter('class'),
                    'title'         => $sc->getParameter('title'),
                    'desc'          => $sc->getParameter('desc'),
                    'descPosition'  => $sc->getParameter('descPosition'),
                    'type'          => $sc->getParameter('type'),
                    'effect'        => $sc->getParameter('effect'),
                    'width'         => $sc->getParameter('width'),
                    'height'        => $sc->getParameter('height'),
                    'zoomable'      => $sc->getParameter('zoomable'),
                    'draggable'     => $sc->getParameter('draggable'),

                ]
            );
        });
    }
}