<h2><?php echo $model->title; ?></h2>
<?php 
	foreach ($model->answers as $answer) {
		  echo "<input type='radio' name='survey[$model->id]' value='$answer->id'>$answer->value<br>";
	}
?>
