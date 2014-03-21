<?php
/* @var $this SurveysController */
/* @var $data Surveys */
?>

<div class="view">
	<?php echo CHtml::link(CHtml::encode($data -> name), array('view', 'id' => $data -> id)); ?>
	<br />
	<br />

</div>