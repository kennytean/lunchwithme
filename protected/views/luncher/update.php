<?php
/* @var $this LuncherController */
/* @var $model Luncher */

$this->breadcrumbs=array(
	'Lunchers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Luncher', 'url'=>array('index')),
	array('label'=>'Create Luncher', 'url'=>array('create')),
	array('label'=>'View Luncher', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Luncher', 'url'=>array('admin')),
);
?>

<h1>Update Luncher <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>