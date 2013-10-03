<?php
/* @var $this FileStatusController */
/* @var $model FileStatus */

$this->breadcrumbs=array(
	'File Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FileStatus', 'url'=>array('index')),
	array('label'=>'Create FileStatus', 'url'=>array('create')),
	array('label'=>'View FileStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FileStatus', 'url'=>array('admin')),
);
?>

<h1>Update FileStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>