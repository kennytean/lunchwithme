<?php
/* @var $this OccasionController */
/* @var $model Occasion */

$this->breadcrumbs=array(
	'Occasions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Occasion', 'url'=>array('index')),
	array('label'=>'Create Occasion', 'url'=>array('create')),
	array('label'=>'View Occasion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Occasion', 'url'=>array('admin')),
);
?>

<h1>Update Occasion <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>