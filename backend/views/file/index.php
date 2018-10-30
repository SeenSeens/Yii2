<?php
$this->title = 'Quan ly hinh anh';
$baseUrl = str_replace('/backend', '', Yii::$app->urlManager->baseUrl);
?>

<div class="file-index">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="pannel-title">
				<?= $this->title; ?>
			</h3>
		</div>
		<div class="panel-body">
			<iframe src="<?= $baseUrl; ?>/filemanager/filemanager/dialog.php?type=0"  width="765" height="550" frameborder="0"></iframe>
		</div>
	</div>
</div>