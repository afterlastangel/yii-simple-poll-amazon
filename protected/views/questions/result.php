<h2><?php echo $model->title; ?></h2>
<?php  
	foreach ($model->answers as $answer) {
		$result = 0;
		error_log(print_r($results,true)."\n",3,'/opt/log/truclk.log');
		if (isset($results[$answer->id])) {
			error_log(print_r("aaaaa",true)."\n",3,'/opt/log/truclk.log');
			$result = $results[$answer->id];
		}
		echo "<li id='answer.$answer->id'><span class='result' >$result</span> - $answer->value</li>";
	}
?>
