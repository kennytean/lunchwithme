<?php
/* @var $this LuncherController */
/* @var $model Luncher */

$this->breadcrumbs=array(
	'Lunchers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Luncher', 'url'=>array('index')),
	array('label'=>'Manage Luncher', 'url'=>array('admin')),
);
?>

<h1>Create Luncher</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>