<?php
/* @var $this DeveloperController */
/* @var $model Developer */


$this->breadcrumbs=array(
	'Developers'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Create Developer', 'url'=>array('create')),
);
$b = Yii::app()->request->baseUrl;

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#developer-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Developers</h1>
<div class="col-md-12">
<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'developer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</div>
<div class="col-md-12">
	<div class="widget">
		<h3>
			Operations
		</h3>
		<ul class="list-group">
			<li class="list-group-item"><a href="<?=$b."/".get_class($model)?>">List <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b."/".get_class($model)?>/create">Create <?=get_class($model)?></a></li>
			<li class="list-group-item"><a href="<?=$b."/".get_class($model)?>/admin">Manage <?=get_class($model)?>s</a></li>
		</ul>
	</div>
</div>