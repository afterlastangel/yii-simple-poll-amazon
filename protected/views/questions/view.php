<?php
/* @var $this QuestionsController */
/* @var $model Questions */

$this->breadcrumbs = array(
	'Questions'=> array('index'),
	$model->title,
);

$this->menu = array(
	array(
		'label'=>'List Questions',
		'url'=> array('index')
	),
	array(
		'label'=>'Create Questions',
		'url'=> array('create')
	),
	array(
		'label'=>'Update Questions',
		'url'=> array(
			'update',
			'id'=>$model->id
		)
	),
	array(
		'label'=>'Delete Questions',
		'url'=>'#',
		'linkOptions'=> array(
			'submit'=> array(
				'delete',
				'id'=>$model->id
			),
			'confirm'=>'Are you sure you want to delete this item?'
		)
	),
	array(
		'label'=>'Manage Questions',
		'url'=> array('admin')
	),
);
?>

<h2><?php echo $model->title; ?></h2>
<?php 
	foreach ($model->answers as $answer) {
		  echo "<input type='radio' name='survey[$model->id]' value='$answer->id'>$answer->value<br>";
	}
?>
