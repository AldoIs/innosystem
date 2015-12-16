<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'facebook' => [
                'class' => 'yii\authclient\clients\Facebook',
                 'authUrl' => 'https://www.facebook.com/dialog/oauth?display=popup',
                'clientId' => '935979873150754',
                'clientSecret' => 'eb196aa45836169e00329530c4c6f1d9',
                ],
            ],
        ],
    ],
    'params' => $params,
];
