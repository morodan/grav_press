<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/plugins/jscomments.yaml',
    'modified' => 1473809760,
    'data' => [
        'enabled' => true,
        'provider' => '',
        'providers' => [
            'disqus' => [
                'shortname' => '',
                'default_lang' => 'en'
            ],
            'intensedebate' => [
                'acct' => ''
            ],
            'facebook' => [
                'appId' => '',
                'lang' => 'en_US',
                'num_posts' => 5,
                'colorscheme' => 'light',
                'order_by' => 'social',
                'width' => '100%'
            ],
            'muut' => [
                'forum' => '',
                'channel' => 'General',
                'show_online' => false,
                'show_title' => false,
                'upload' => false,
                'share' => true,
                'widget' => false,
                'lang' => 'en'
            ]
        ]
    ]
];
