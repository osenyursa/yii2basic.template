<?php

namespace app\modules\admin;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    public $layout = 'main';
    public $defaultRoute = 'site';

    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
