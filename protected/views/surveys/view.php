<?php
/* @var $this SurveysController */
/* @var $model Surveys */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	$model->name,
);

$this->menu=array(
	array(
			'label'=>'Add Questions',
			'url'=> array('questions/create','surveyId' => $model->id)
	),
	array(
			'label'=>'Manage Questions',
			'url'=> array('questions/admin','surveyId' => $model->id)
	),
	array('label'=>'List Surveys', 'url'=>array('index')),
	array('label'=>'Create Surveys', 'url'=>array('create')),
	array('label'=>'Update Surveys', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Surveys', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Surveys', 'url'=>array('admin')),
);
?>

<h1>Survey: <?php echo $model->name; ?></h1>

<form name="survey" method="POST" action='<?php echo $this->createUrl('surveys/submit',array('id'=>$model->id))?>'>
<?php
foreach ($model->questions as $question) {
	$this->renderPartial('question_view',array('model' => $question)); 
}
?>
<input type="submit" value="Submit">
</form>
