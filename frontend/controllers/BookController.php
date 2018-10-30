<?php
namespace frontend\controllers;
use yii\web\Controller;
use backend\models\Book;

class BookController extends Controller {
    public function actionIndex() {

    }

    public function actionView($slug) {
        $model = Book::findOne(['slug' => $slug]);
        /*if ($model === null) {
            throw new NotFoundHttpException;
        }*/
        return $this->render('view', [
            'model' => $model,
        ]);
        //return $slug;
    }
}
?>