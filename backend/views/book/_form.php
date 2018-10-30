<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;
use backend\models\Category;
use dosamigos\tinymce\TinyMce;


?>

<div class="book-form">

    <?php $form = ActiveForm::begin(['options' =>['enctype' =>'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
  
    <?php
        $cat = new Category;
    ?>
    <?= $form->field($model, 'cate')->dropDownlist(
        $cat->getParent(),
            [
              'prompt' => ''
            ]
    ) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['multiple' => true, 'accept' => 'image/*'])?>

    <?= $form->field($model, 'desc')->widget(TinyMCE::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            // 'filemanager_title' => 'Responsive Filemanager',
		    // 'external_plugins' => [
			// 'filemanager' => '/plugins/responsivefilemanager/filemanager/plugin.min.js',
			// 'responsivefilemanager' => '/plugins/responsivefilemanager/tinymce/plugins/responsivefilemanager/plugin.min.js',
		    // ],
		    // 'relative_urls' => 0,
        ]
    ]) ?>

    <?= $form->field($model, 'content')->widget(TinyMCE::className(), [
        'options' => ['rows' => 6],
        'language' => 'es',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        ]
    ]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'page')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownlist(
        [
            '0' => 'Không kích hoạt',
            '1' => 'Kích hoạt'
        ],
        [
            //'prompt' =>'Chọn trang thái'
        ]
    )?>

    <?= $form->field($model, 'publish_at')->widget(
        DatePicker::className(), [
            // inline too, not bad
             'inline' => false, 
             // modify template for custom rendering
            
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ]
    ])?>

    

    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
