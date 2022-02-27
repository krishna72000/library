<?php

namespace app\modules\admin;

use Yii;
use yii\helpers\Url;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';
    public $layout = 'main';

    public $defaultRoute = '/admin/book/index';
    public $homeUrl="/admin/book/index";
    
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        Yii::$app->homeUrl=Url::to(["/admin/book/index"]);
        Yii::$app->errorHandler->errorAction = '/admin/default/error';
        
        Yii::$app->set('user', [
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\Admin',
            'enableAutoLogin' => true,
            'loginUrl' => ['admin/default/index'],
            'identityCookie' => ['name' => 'admindata', 'httpOnly' => true],
            'idParam' => 'admin_id', //this is important !
       

        ]);
    
        Yii::$app->set('session', [
            'class' => 'yii\web\Session',
            'name' => '_adminSessionId',
        ]);
    
        // custom initialization code goes here
    }
}
