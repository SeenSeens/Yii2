<?php
namespace frontend\controllers;

use yii\web\Controller;

class DemoController extends Controller {
    /**
     * Trang index
     */
    public function actionIndex() {
        return $this->render('index'); // gọi tới 1 view tương ứng
    }
    /**
     * Trang info
     */
    public function actionInfo() {
        return $this->render('info');
    }
    /**
     * HelloWord
     */
    public function actionHelloWord() {
        return $this->render('hello-word');
    }
}
