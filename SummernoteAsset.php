<?php
/**
 * @copyright Aleksandr Zelenin <aleksandr@zelenin.me>
 */
namespace Zelenin\yii\widgets\Summernote;

use Yii;
use yii\web\AssetBundle;

class SummernoteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zelenin/yii2-summernote-widget/assets/summernote/dist';
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'Zelenin\yii\widgets\Summernote\FontawesomeAsset'
    ];

    public function init()
    {
        $this->css[] = 'summernote.css';
        $this->js[] = YII_DEBUG
            ? 'summernote.js'
            : 'summernote.min.js';

        parent::init();
    }
}
