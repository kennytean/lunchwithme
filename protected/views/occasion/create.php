<?php
/* @var $this OccasionController */
/* @var $model Occasion */

$this->breadcrumbs=array(
	'Occasions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Occasion', 'url'=>array('index')),
	array('label'=>'Manage Occasion', 'url'=>array('admin')),
);
?>

<h1>Create Occasion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>