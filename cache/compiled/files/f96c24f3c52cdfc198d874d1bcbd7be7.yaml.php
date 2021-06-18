<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/gravPremium/user/plugins/svg-icons/blueprints.yaml',
    'modified' => 1623982146,
    'data' => [
        'name' => 'Svg Icons',
        'type' => 'plugin',
        'slug' => 'svg-icons',
        'version' => '1.0.2',
        'premium' => true,
        'description' => 'Various SVG icons and utilties to use them.',
        'icon' => 'diamond',
        'author' => [
            'name' => 'Trilby Media, LLC',
            'email' => 'hello@trilby.media'
        ],
        'homepage' => 'https://getgrav.org/premium/site-toolbox#svg-icons',
        'keywords' => 'grav, premium, svg, icons, heroicons, social, tabler, nextgen-editor',
        'bugs' => 'https://github.com/getgrav/grav-premium-issues/issues?q=label:site-toolbox+label:svg-icons',
        'docs' => 'https://getgrav.org/premium/site-toolbox/docs#svg-icons',
        'license' => 'https://getgrav.org/premium/license',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.30'
            ],
            1 => [
                'name' => 'shortcode-core',
                'version' => '>=4.2.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
