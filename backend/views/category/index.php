<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Category;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    
    
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body"> 
            <p class="pull-right">
                <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([          
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    [
                        'class' => 'yii\grid\SerialColumn',
                        'header' => 'STT'
                    ], // dấu #
                    ['class' => 'yii\grid\CheckboxColumn'], // checkbox column
                    //'id',
                    'name',
                    'slug',
                    [
                        'attribute' => 'perent',
                        'content' => function ($model) {
                            if($model->perent == 0) {
                                return 'Root';
                            } else {
                                $perent = Category::find()->where(['id'=>$model->perent])->one();
                                if($perent) {
                                    return '<span class="label label-info">'.$perent->name.'</span>';
                                } else {
                                    return 'Không rõ';
                                }
                            }

                        },
                    ],
                    [
                        'attribute' => 'status',
                        'content' => function ($model) {
                            if($model->status == 0) {
                                return '<span class="label label-danger">Không kích hoạt</span>';
                            } else {
                                return '<span class="label label-success">Kích hoạt</span>';
                            }
                        },
                    ],

                    [
                        'attribute' => 'created_at',
                        'content' => function ($model) {
                            return date('d-m-Y', $model->created_at);
                        }
                    ],

                    [
                        'attribute' => 'updated_at',
                        'content' => function ($model) {
                            return date('d-m-Y', $model->created_at);
                        }
                    ],

                    ['class' => 'yii\grid\ActionColumn',
                    
                        'buttons' =>[
                            'view' => function($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-grain"></span> View', $url, ['class' => 'btn btn-xs btn-info']);
                            },
                            'update' => function($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-edit"></span> Update', $url, ['class' => 'btn btn-xs btn-warning']);
                            },
                            'delete' => function($url, $model) {
                                return Html::a('<span class="glyphicon glyphicon-remove"></span> Delete', $url, [
                                    'class' => 'btn btn-xs btn-danger',
                                    'data-confirm' =>'Bạn chắc chắn muốn xóa'.$model->name,
                                    'data-method' => 'post'
                                ]);
                            }
                        ],
                    ],
                ],
            ]);?>
          </div>
    </div>
    
    
</div>
