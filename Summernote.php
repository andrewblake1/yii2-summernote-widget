<?php
namespace Zelenin\yii\widgets\Summernote;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class Summernote extends InputWidget
{
    private $defaultOptions = ['class' => 'form-control'];
    private $defaultClientOptions = ['height' => 200];
    public $options = [];
    public $clientOptions = [];

    public function init()
    {
        $this->options = array_merge($this->options, $this->defaultOptions);
        $this->clientOptions = array_merge($this->clientOptions, $this->defaultClientOptions);
        parent::init();
    }

    public function run()
    {
        $view = $this->getView();
        SummernoteAsset::register($view);
        echo $this->hasModel()
            ? Html::activeTextarea($this->model, $this->attribute, $this->options)
            : Html::textarea($this->name, $this->value, $this->options);
        $clientOptions = empty($this->clientOptions)
            ? null
            : Json::encode($this->clientOptions);
        $view->registerJs('jQuery( "#' . $this->options['id'] . '" ).summernote(' . $clientOptions . ');');
    }
}
