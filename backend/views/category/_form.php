<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="panel panel-primary">
      <div class="panel-heading">
            <h3 class="panel-title">Thêm danh mục</h3>
      </div>
      <div class="panel-body">
      <div class="category-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

        <?php
            $cat = new Category;
        ?>
        <?= $form->field($model, 'perent')->dropDownlist(
           //ArrayHelper::map(Category::find()->all(), 'id', 'name'),
           $cat->getParent(),
            [
              'prompt' => ''
            ]
        ) ?>

        <?= $form->field($model, 'status')->dropDownlist(
            [
                '0' => 'Không kích hoạt',
                '1' => 'Kích hoạt'
            ],
            [
                'prompt' =>'Chọn trang thái'
            ]
        ) ?>

        <!--     $form->field($model, 'created_at')->widget(
        // DatePicker::className(), [
                // inline too, not bad
                'inline' => false, 
                // modify template for custom rendering
                // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
            // 'clientOptions' => [
                    'autoclose' => true,
                    'format' => 'd-m-yyyy'
            //  ]
        //]); -->


        <!-- $form->field($model, 'updated_at')->widget(
            //DatePicker::className(), [
                // inline too, not bad
                //'inline' => false, 
                // modify template for custom rendering
                // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                //'clientOptions' => [
                    //'autoclose' => true,
                    //'format' => 'dd-mm-yyyy'
                //]
        //]) -->

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>


