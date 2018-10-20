<?php
namespace api\controllers;
use yii;
use yii\web\Controller;
class SiteController extends Controller{
    public function actionIndex(){
        return $this->render('/site/index.html');
    }
}
