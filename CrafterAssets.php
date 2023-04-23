<?php

namespace codecrafter\dashboard;

use yii\web\AssetBundle;

class CrafterAssets extends AssetBundle
{
    public $sourcePath = '@vendor/codecrafter/yii2-crafter-dashboard';
    public $css = [
      'assets/css/bootstrap.min.css',
      'assets/css/icons.min.css',
      'assets/css/app.min.css'
    ];
    public $js = [
      'assets/libs/jquery/jquery.min.js',
      'assets/libs/bootstrap/js/bootstrap.bundle.min.js',
      'assets/libs/metismenu/metisMenu.min.js',
      'assets/libs/simplebar/simplebar.min.js',
      'assets/libs/node-waves/waves.min.js',
      'assets/js/app.js'
    ];

    public $depends = [
        'yii\web\YiiAsset'
    ];
}