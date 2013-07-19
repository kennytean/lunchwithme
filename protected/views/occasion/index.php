<?php
/* @var $this OccasionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Occasions',
);

$this->menu=array(
	array('label'=>'Create Occasion', 'url'=>array('create')),
	array('label'=>'Manage Occasion', 'url'=>array('admin')),
);
?>

<h1>Occasions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
