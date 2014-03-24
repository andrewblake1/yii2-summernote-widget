<?php
namespace Zelenin\yii\widgets\Summernote;

use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zelenin/yii2-summernote-widget/assets';
    public $depends = ['yii\bootstrap\BootstrapPluginAsset'];

    public function init()
    {
        $this->css[] = 'summernote.css';
        $this->js[] = YII_DEBUG ? 'summernote.js' : 'summernote.min.js';
        parent::init();
    }
}
