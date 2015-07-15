<?php
    define('YII_DEBUG', true);
    require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
    $config = require(__DIR__ . '/../config/web.php');

    ini_set('display_errors', true);

    (new yii\web\Application($config))->run();