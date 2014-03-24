<?php
/* @var $this QuestionsController */
/* @var $model Questions */

$this->breadcrumbs=array(
	'Questions'=>array('questions/admin','surveyId'=>$model->survey_id),
	$model->title,
);

$this->menu=array(
	array('label'=>'Update Questions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Questions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Create Answers', 'url'=>array('answers/create','questionId'=>$model->id)),
	array('label'=>'Manage Answers', 'url'=>array('answers/admin','questionId'=>$model->id)),
		
);
?>

<h1>View Questions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'survey_id',
	),
)); ?>

<?php 
	$this->renderPartial('question_answers_index',array('dataProvider' => $answers));
?> 

