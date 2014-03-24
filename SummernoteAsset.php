<?php
namespace Zelenin\yii\widgets\Summernote;

use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zelenin/yii2-summernote-widget/assets/summernote';
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'Zelenin\yii\widgets\Summernote\FontawesomeAsset'
    ];

    public function init()
    {
        $this->css[] = 'dist/summernote.css';
        $this->js[] = YII_DEBUG ? 'dist/summernote.js' : 'dist/summernote.min.js';
        parent::init();
    }
}
