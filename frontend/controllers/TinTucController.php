<?php
namespace frontend\controllers;

use yii\web\Controller;

class TinTucController extends Controller {
    /**
     * actionIndex
     */
    public function actionIndex() {
        echo 'ádasdasdsadsad';
    }
    public function actionTinTheGioi() {
        return $this->render('tin-the-gioi');
    }
}
