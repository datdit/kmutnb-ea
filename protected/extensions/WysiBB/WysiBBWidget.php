<?php

class WysiBBWidget extends CInputWidget {

    const PACKAGE_ID = 'wysibb-widget';

    protected $assetsPath;
    protected $assetsUrl;
    public $selector;
    public $buttons;

    public function init() {
        parent::init();
        if ($this->assetsPath === null) {
            $this->assetsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        }
        if ($this->assetsUrl === null) {
            $this->assetsUrl = Yii::app()->assetManager->publish($this->assetsPath);
        }
        if ($this->selector === null) {
            list($this->name, $this->id) = $this->resolveNameId();
            $this->selector = '#' . $this->id;
        }
        $this->registerClientScript();
    }

    public function run() {
        if ($this->hasModel()) {
            echo CHtml::activeTextArea($this->model, $this->attribute, $this->htmlOptions);
        } else if ($this->selector !== null) {
            echo CHtml::textArea($this->name, $this->value, $this->htmlOptions);
        }
    }

    protected function registerClientScript() {
        $cs = Yii::app()->clientScript;
        if (!isset($cs->packages[self::PACKAGE_ID])) {
            $cs->packages[self::PACKAGE_ID] = array(
                'basePath' => $this->assetsPath,
                'baseUrl' => $this->assetsUrl,
                'js' => array(
                    //'js/wysibb' . (YII_DEBUG ? '' : '.min') . '.js',
                    'js/wysibb.js',
                ),
                'css' => array(
                    'css/wysibb.css',
                ),
                'depends' => array(
                    'jquery',
                ),
            );
        }
        $cs->registerPackage(self::PACKAGE_ID);
        $cs->registerScript(
                __CLASS__ . '#' . $this->id, "jQuery(document).ready(function() {jQuery(" . CJavaScript::encode($this->selector) . ").wysibb(" . (!$this->buttons ? '' : "{buttons: '" . $this->buttons . "'}" ) . ");});", CClientScript::POS_HEAD
        );
    }

}