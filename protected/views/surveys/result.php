<?php
/* @var $this SurveysController */
/* @var $model Surveys */

$this->breadcrumbs=array(
	'Surveys'=>array('result'),
	$model->name,
);
?>

<h1>Survey: <?php echo $model->name; ?></h1>

<?php
foreach ($model->questions as $question) {
	$this->renderPartial('/questions/result',array('model' => $question,'results'=>$results)); 
}
?>
