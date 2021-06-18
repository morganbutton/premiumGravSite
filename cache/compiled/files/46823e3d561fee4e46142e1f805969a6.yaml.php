<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/gravPremium/user/plugins/license-manager/admin/blueprints/licenses.yaml',
    'modified' => 1623981978,
    'data' => [
        'title' => 'PLUGIN_ADMIN.MEDIA',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'info_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_LICENSE_MANAGER.INFO_TITLE',
                    'underline' => true
                ],
                'info' => [
                    'type' => 'display',
                    'style' => 'vertical',
                    'content' => 'PLUGIN_LICENSE_MANAGER.INFO',
                    'markdown' => true
                ],
                'licenses_title' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_LICENSE_MANAGER.LICENSES',
                    'underline' => true
                ],
                'licenses' => [
                    'type' => 'array',
                    'style' => 'vertical',
                    'label' => NULL,
                    'help' => 'PLUGIN_LICENSE_MANAGER.LICENSES_HELP',
                    'placeholder_key' => 'PLUGIN_LICENSE_MANAGER.SLUG',
                    'placeholder_value' => 'PLUGIN_LICENSE_MANAGER.LICENSE'
                ]
            ]
        ]
    ]
];
