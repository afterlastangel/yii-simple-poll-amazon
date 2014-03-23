<h2><?php echo $model->title; ?></h2>
<?php  
	foreach ($model->answers as $answer) {
		$result = 0;
		if (isset($results[$answer->id])) {
			$result = $results[$answer->id];
		}
		echo "<li id='answer.$answer->id'><span class='result' >$result</span> - $answer->value</li>";
	}
?>
