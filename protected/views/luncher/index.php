<?php
/* @var $this LuncherController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lunchers',
);

$this->menu=array(
	array('label'=>'Create Luncher', 'url'=>array('create')),
	array('label'=>'Manage Luncher', 'url'=>array('admin')),
);
?>

<h1>Lunchers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
