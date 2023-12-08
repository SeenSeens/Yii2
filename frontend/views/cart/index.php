<?php
/**
 * Created by PhpStorm.
 * User: tuanin
 * Date: 31/10/2018
 * Time: 14:21
 */
$this->title = "Sopping Cart";
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

?>

<div class="container">
    <?php if($cartstore): $n = 1; ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>`
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($cartstore as $item): ?>
            <tr>
                <td><?= $n; ?></td>
                <td><?= $item->name; ?></td>
                <td><?= $item->qtt; ?></td>
                <td><?= number_format($item->price, 0, ' ',',') ?></td>
                <td><?= number_format($item->price * $item->qtt, 0, ' ', ',') ?></td>
                <td>
                    <?php $form = ActiveForm::begin([
                        //'id' => 'login-form',
                        'action' => Url::to(['/cart/update-cart']),
                        //'options' => ['class' => 'form-horizontal'],

                    ]) ?>
                    <input type="hidden" name="id" value="<?= $item->id; ?>" />
                    <input type="text" name="qtt" value="<?= $item->qtt; ?>" size="2" class="form-control" />
                    <input type="submit" name="update" value="Update" class="btn btn-success" />
                    <?php ActiveForm::end() ?>
                    <?= Html::a('Delete', ['/cart/remove', 'slug' =>$item->slug], ['class' => 'btn btn-sm btn-danger']); ?>
                </td>
            </tr>
        <?php $n++; endforeach; ?>
        <tr>
            <td align="right" colspan="4" >Tổng tiền</td>
            <td ><?= number_format($cost, 0, ' ', ',') ?> VND</td>
        </tr>
        </tbody>
    </table>
    <div class="action clearfix">
        <?= Html::a('Tiếp tục mua hàng', ['/site'], ['class' => 'btn btn-success'])?>
        <?= Html::a('Xóa giổ hàng', ['/cart/clear'], ['class' => 'btn btn-danger'])?>
        <?= Html::a('Đặt hàng', ['/checkout/index'], ['class' => 'btn btn-primary'])?>
    </div>
    <?php else : ?>
    <div class="alert alert-warning">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>Thông báo!</strong> Giỏ hàng rổng
        <?= Html::a('Tiếp tục mua hàng', ['/site'], ['class' => 'btn btn-success'])?>
    </div>
    <?php endif; ?>
</div>
