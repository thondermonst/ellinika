<?php

namespace app\modules\tests\assets;

use yii\web\AssetBundle;

class TestsAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/tests/assets/';
    public $css = [
        'css/tests.css',
    ];
    public $js = [
        'js/tests.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}