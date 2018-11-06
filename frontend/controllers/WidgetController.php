<?php
/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 05/11/2018
 * Time: 08:59
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;


class WidgetController extends Controller {
    public function actionDemo() {
        return $this->render('demo');
    }
}