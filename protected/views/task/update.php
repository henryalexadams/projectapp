<?php
/* @var $this TaskController */
/* @var $model Task */
?>

<?php
$this->breadcrumbs=array(
	'Tasks'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Task', 'url'=>array('index')),
	array('label'=>'Create Task', 'url'=>array('create')),
	array('label'=>'View Task', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Task', 'url'=>array('admin')),
);
?>

    <h1>Update Task <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>