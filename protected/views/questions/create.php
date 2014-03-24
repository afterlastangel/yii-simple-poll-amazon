<?php
/* @var $this QuestionsController */
/* @var $model Questions */

$this->breadcrumbs=array(
	'Survey'=>array('surveys/view','id'=>$model->survey_id),
	'Create',
);

$this->menu=array(
	array('label'=>'Back to survey', 'url'=>array('surveys/view','id'=>$model->survey_id)),
);
?>

<h1>Create Questions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>