<?php
/* @var $this TaskController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Tasks',
);

$this->menu=array(
	array('label'=>'Create Task','url'=>array('create')),
	array('label'=>'Manage Task','url'=>array('admin')),
);
?>

<h1>Tasks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>