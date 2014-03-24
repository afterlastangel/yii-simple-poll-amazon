<?php
/* @var $this SurveysController */
/* @var $model Surveys */

$this->breadcrumbs=array(
	'Surveys'=>array('view','id' => $model->id),
	$model->name,
);

$this->menu=array(
		array(
				'label'=>'Back to survey',
				'url'=> array('view','id' => $model->id),
		),
);
?>

<h1>Survey: <?php echo $model->name; ?></h1>

<?php
foreach ($model->questions as $question) {
	$this->renderPartial('/questions/result',array('model' => $question,'results'=>$results)); 
}
?>
