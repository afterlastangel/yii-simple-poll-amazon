<?php
/* @var $this QuestionsController */
/* @var $model Questions */

$this->breadcrumbs=array(
	'Survey'=>array('surveys/view','id'=>$model->survey_id),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'View Questions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Back to survey', 'url'=>array('surveys/view','id'=>$model->survey_id)),
);
?>

<h1>Update Questions <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>