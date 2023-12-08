<?php
use yii\helpers\Html;

?>
<?php
$this->title = ($model) ? $model->name : 'Not found';
?>

<div class="view-book">
	<?php if($model) : ?>
	<div class="col-md-4">
		<img src="http://localhost/yii-application/uploads/<?= $model->image ?>" alt="<?= $model->name; ?>" class="img-responsive">
	</div>
	<div class="col-md-8">
		<h1 class="book-title"><?= $model->name; ?></h1>
		<?= $model->slug?>
		<?= $model->content; ?>
        <?= Html::a('Add to cart', ['/cart/add-cart', 'slug' => $model->slug], ['class' => 'btn btn-info']); ?>
	</div>
	<?php else : ?>
		<div class="alert alert-danger">
			<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!!</strong> Không có thông tin sách
		</div>
	<?php endif; ?>
</div>