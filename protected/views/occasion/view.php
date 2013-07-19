<?php
/* @var $this OccasionController */
/* @var $model Occasion */

$this->breadcrumbs=array(
	'Occasions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Occasion', 'url'=>array('index')),
	array('label'=>'Create Occasion', 'url'=>array('create')),
	array('label'=>'Update Occasion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Occasion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Occasion', 'url'=>array('admin')),
);
?>

<h1>View Occasion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'datetime',
		'description',
		'status',
		'created_at',
	),
)); ?>
