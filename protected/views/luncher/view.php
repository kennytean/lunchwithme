<?php
/* @var $this LuncherController */
/* @var $model Luncher */

$this->breadcrumbs=array(
	'Lunchers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Luncher', 'url'=>array('index')),
	array('label'=>'Create Luncher', 'url'=>array('create')),
	array('label'=>'Update Luncher', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Luncher', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Luncher', 'url'=>array('admin')),
);
?>

<h1>View Luncher #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'occation_id',
		'created_at',
	),
)); ?>
