<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'EclY9SNijghe30dGqQnJH8Pkg7epSNZk',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'suffix' => '.html',
            'rules' => [
                'login' => 'site/login',
                'home' => 'site/index',
                'promotion' => 'article/promotion',
                'gallery' => 'article/gallery',
                'facility/<alias>' => 'article/facility',
                'sahid/<alias>' => 'article/sahid',
                'contact-us' => 'site/contact',
                'news/<alias>' => 'article/news',
                'article/<alias>' => 'article/view',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ]
        ],
    ],
    'params' => ['urlImg'=>'http://192.168.1.103/landa/sahidmontana_cp/backend/www/sahidmontana/images'],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
