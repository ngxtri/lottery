<?php
/* @var $this DevelopmentTypeController */
/* @var $model DevelopmentType */
?>

<?php
$this->breadcrumbs=array(
	'Development Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
$b = Yii::app()->request->baseUrl;

$this->menu=array(
	array('label'=>'List DevelopmentType', 'url'=>array('index')),
	array('label'=>'Create DevelopmentType', 'url'=>array('create')),
	array('label'=>'View DevelopmentType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DevelopmentType', 'url'=>array('admin')),
);
?>

    <h1>Update DevelopmentType <?php echo $model->id; ?></h1>
<div class="col-md-9">
<?php $this->renderPartial('_form', array('model'=>$model)); ?></div>
<div class="col-md-3">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b?>/<?=get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>