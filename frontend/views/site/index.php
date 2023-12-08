<?php

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">



    <div class="body-content">
    <?php if($Book) : ?>
        <div class="row">
        <?php foreach($Book as $item) : ?>
            <div class="col-lg-3">
                <h2><?= $item->name; ?></h2>
                    <?= $item->desc; ?>

                <p><?= Html::a('Xem thêm &raquo;', ['/book/view', 'slug' => $item->slug], ['class' => 'btn btn-info']); ?></p>
                <p><?= Html::a('Them vao gio', ['/cart/add-cart', 'slug' => $item->slug], ['class' => 'btn btn-success']); ?></p>
            </div>

        <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </div>
</div>
