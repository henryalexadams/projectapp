<?php
/* @var $this InstanceController */
/* @var $model Instance */

$this->breadcrumbs=array(
	'Instances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Instance', 'url'=>array('index')),
	array('label'=>'Manage Instance', 'url'=>array('admin')),
);
?>

<h1>Create Instance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>