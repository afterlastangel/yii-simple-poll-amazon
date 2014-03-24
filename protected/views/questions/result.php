<h2><?php echo $model->title; ?></h2>
<?php
$data = array();
$data[] = array("Answer","Results");
foreach ( $model->answers as $answer ) {
	$result = 0;
	if (isset ( $results [$answer->id] )) {
		$result = $results [$answer->id];
	}
	$data[] = array($answer->value,intval($result)); 
}
?>
<?php
	$this->widget('ext.Hzl.google.HzlVisualizationChart', array('visualization' => 'PieChart',
		'data' => $data,
		'options' => array('title' => 'Results','sliceVisibilityThreshold'=>'0',)));
?>

