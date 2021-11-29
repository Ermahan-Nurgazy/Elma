<?php


namespace app\controllers;


use yii\web\Controller;

class MainController extends Controller
{

    public $layout = 'elma';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
