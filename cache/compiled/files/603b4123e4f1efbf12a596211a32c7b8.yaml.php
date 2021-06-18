<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/gravPremium/user/themes/typhoon/blueprints/partials/hero.yaml',
    'modified' => 1623982155,
    'data' => [
        'form' => [
            'fields' => [
                'section_herotab' => [
                    'type' => 'section',
                    'title' => 'THEME_TYPHOON.BLUEPRINTS.HERO_CONTENT',
                    'underline' => true
                ],
                'header.hero.subtitle' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.SUBTITLE',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.SUBTITLE_HELP'
                ],
                'header.hero.title.text' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.TITLE_TEXT',
                    'placeholder' => 'THEME_TYPHOON.BLUEPRINTS.TITLE_TEXT_PLACEHOLDER'
                ],
                'header.hero.title.color' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.TITLE_COLOR',
                    'placeholder' => 'THEME_TYPHOON.BLUEPRINTS.TITLE_COLOR_PLACEHOLDER'
                ],
                'header.hero.title2.text' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.TITLE2_TEXT',
                    'placeholder' => 'THEME_TYPHOON.BLUEPRINTS.TITLE2_TEXT_PLACEHOLDER'
                ],
                'header.hero.title2.color' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.TITLE2_COLOR',
                    'placeholder' => 'THEME_TYPHOON.BLUEPRINTS.TITLE2_COLOR_PLACEHOLDER'
                ],
                'header.hero.text' => [
                    'toggleable' => true,
                    'type' => 'select',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.DEFAULT_TEXT',
                    'help' => 'THEME_TYPHOON.BLUEPRINTS.DEFAULT_TEXT_HELP',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'THEME_TYPHOON.BLUEPRINTS.DEFAULT_TEXT_AUTO',
                        'light' => 'THEME_TYPHOON.BLUEPRINTS.DEFAULT_TEXT_LIGHT',
                        'dark' => 'THEME_TYPHOON.BLUEPRINTS.DEFAULT_TEXT_DARK'
                    ]
                ],
                'header.hero.content' => [
                    'toggleable' => true,
                    'type' => 'textarea',
                    'label' => 'THEME_TYPHOON.BLUEPRINTS.HERO_CONTENT',
                    'rows' => 5
                ],
                'header.hero.buttons' => [
                    'type' => 'list',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_BUTTONS',
                    'style' => 'horizontal',
                    'fields' => [
                        '.text' => [
                            'toggleable' => true,
                            'type' => 'text',
                            'label' => 'THEME_TYPHOON.BLUEPRINTS.TEXT'
                        ],
                        '.link' => [
                            'toggleable' => true,
                            'type' => 'text',
                            'label' => 'THEME_TYPHOON.BLUEPRINTS.LINK'
                        ],
                        '.classes' => [
                            'toggleable' => true,
                            'type' => 'text',
                            'label' => 'THEME_TYPHOON.BLUEPRINTS.CLASSES',
                            'default' => 'bg-primary text-white'
                        ]
                    ]
                ],
                'section_herosettings' => [
                    'type' => 'section',
                    'title' => 'THEME_TYPHOON.ADMIN.HERO_SETTINGS',
                    'underline' => true
                ],
                'header.hero.display' => [
                    'type' => 'toggle',
                    'toggleable' => true,
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_DISPLAY',
                    'help' => 'THEME_TYPHOON.ADMIN.HERO_DISPLAY_HELP',
                    'config-default@' => 'theme.hero.display',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.YES',
                        0 => 'PLUGIN_ADMIN.NO'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'header.hero.alignment' => [
                    'toggleable' => true,
                    'type' => 'toggle',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT',
                    'config-default@' => 'theme.hero.alignment',
                    'highlight' => 'left',
                    'options' => [
                        'left' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT_LEFT',
                        'center' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT_CENTER',
                        'right' => 'THEME_TYPHOON.ADMIN.HERO_ALIGNMENT_RIGHT'
                    ]
                ],
                'header.hero.image' => [
                    'toggleable' => true,
                    'type' => 'filepicker',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_IMAGE',
                    'help' => 'THEME_TYPHOON.ADMIN.HERO_IMAGE_HELP',
                    'preview_images' => true,
                    'accept' => [
                        0 => '.png',
                        1 => '.jpg'
                    ]
                ],
                'header.hero.padding' => [
                    'toggleable' => true,
                    'type' => 'text',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_PADDING_CLASSES',
                    'config-default@' => 'theme.hero.padding'
                ],
                'section_overlay' => [
                    'type' => 'section',
                    'title' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_TITLE',
                    'underline' => true
                ],
                'header.hero.overlay' => [
                    'toggleable' => true,
                    'type' => 'select',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY',
                    'help' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_HELP',
                    'config-default@' => 'theme.hero.overlay',
                    'options' => [
                        'dark' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_DARK',
                        'darker' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_DARKER',
                        'light' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_LIGHT',
                        'lighter' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_LIGHTER',
                        'primary' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_PRIMARY',
                        'none' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_NONE',
                        'custom' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_CUSTOM'
                    ]
                ],
                'header.hero.custom' => [
                    'toggleable' => true,
                    'type' => 'colorpicker',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_CUSTOM_OVERLAY_COLOR',
                    'help' => 'THEME_TYPHOON.ADMIN.HERO_CUSTOM_OVERLAY_COLOR_HELP',
                    'config-default@' => 'theme.hero.custom'
                ],
                'header.hero.overlay_gradient' => [
                    'toggleable' => true,
                    'type' => 'selectize',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_OPACITY',
                    'help' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_OPACITY_HELP',
                    'default' => [
                        0 => 0.8,
                        1 => 0.3
                    ],
                    'classes' => 'fancy',
                    'validate' => [
                        'type' => 'commalist'
                    ]
                ],
                'header.hero.overlay_direction' => [
                    'toggleable' => true,
                    'type' => 'select',
                    'label' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION',
                    'config-default@' => 'theme.hero.overlay_direction',
                    'options' => [
                        'right' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_RIGHT',
                        'bottom' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_BOTTOM',
                        'top' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_TOP',
                        'left' => 'THEME_TYPHOON.ADMIN.HERO_OVERLAY_GRADIENT_DIRECTION_LEFT'
                    ]
                ]
            ]
        ]
    ]
];
