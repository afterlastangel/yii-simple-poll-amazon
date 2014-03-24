<?php
/* @var $this AnswersController */
/* @var $model Answers */

$this->breadcrumbs=array(
	'Answers',
	'Manage',
);

$this->menu=array(
	array('label'=>'Create Answers', 'url'=>array('create','questionId'=>$questionId)),
);

if ($questionId) {
	$this->menu[] = 	array('label'=>'Back to question', 'url'=>array('questions/view','id'=>$questionId));
}
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#answers-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Answers</h1>

<p>
<?php 
if ($questionId!= null) {
echo "Answers for question : " . $questionId;
}
?>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php

$columns =array(
		'id',
		'value',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	);
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'answers-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>$columns,
)); ?>
