<?php
/* @var $this SurveysController */
/* @var $model Surveys */

$this->breadcrumbs=array(
	'Surveys'=>array('index'),
	$model->name,
);

$this->menu=array(
	array(
			'label'=>'View Results',
			'url'=> array('surveys/result','id' => $model->id),
	),
	array(
			'label'=>'Add Questions',
			'url'=> array('questions/create','surveyId' => $model->id),
			'visible'=>(Yii::app()->user->name == 'admin'),
	),
	array(
			'label'=>'Manage Questions',
			'url'=> array('questions/admin','surveyId' => $model->id),
			'visible'=>(Yii::app()->user->name == 'admin'),
	),
	array('label'=>'List Surveys', 'url'=>array('index'),'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Create Surveys', 'url'=>array('create'),'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Update Surveys', 'url'=>array('update', 'id'=>$model->id),'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Delete Surveys', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>(Yii::app()->user->name == 'admin'),),
	array('label'=>'Manage Surveys', 'url'=>array('admin'),'visible'=>(Yii::app()->user->name == 'admin'),),
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
