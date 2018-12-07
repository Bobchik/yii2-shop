<?php
/**
 * Created by PhpStorm.
 * User: bobka
 * Date: 11/25/18
 * Time: 5:23 PM
 */

return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'baseUrl' => '',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a:login|logout>' => 'site/<_a>'
    ],
];