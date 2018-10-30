<?php
$this->title = ($model) ? $model->name : 'Not found';
?>

<div class="view-book">
	<?php if($model) : ?>
	<div class="col-md-4">
		<img src="../../../uploads/<?= $model->image ?>" alt="<?= $model->name; ?>" class="img-responsive">
	</div>
	<div class="col-md-8">
		<h1 class="book-title"><?= $model->name; ?></h1>
		
		<?= $model->content; ?>
		<p><a href="#" title="Them vao gio hang" class="btn btn-success">Them vao gio</a></p>
	</div>
	<?php else : ?>
		<div class="alert alert-danger">
			<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Error!!</strong> Khong co thong tin sach
		</div>
	<?php endif; ?>
</div>