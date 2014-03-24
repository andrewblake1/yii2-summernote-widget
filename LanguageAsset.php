<?php
/**
 * @copyright Aleksandr Zelenin <aleksandr@zelenin.me>
 */
namespace Zelenin\yii\widgets\Summernote;

use Yii;
use yii\web\AssetBundle;

class LanguageAsset extends AssetBundle
{
    public $language;
    public $sourcePath = '@vendor/zelenin/yii2-summernote-widget/assets/summernote/lang';

    public function registerAssetFiles($view)
    {
        $this->js[] = 'summernote-' . $this->language . '.js';
        parent::registerAssetFiles($view);
    }
}
