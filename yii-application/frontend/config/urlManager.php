<?php
return [
    'class' => 'yii\web\Session',
    'hostInfo' => $params['backendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a:login|logout>' => 'site/<_a>',
        '<c:[\w\-]+>' => '<_c>/index',
        '<c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<c:[\w\-]+>/<id:\d+><_a:[\w-]+>' => '<_c>/<_a>',

    ],
];
//zzzzzz