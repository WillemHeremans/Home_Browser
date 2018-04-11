<?php

	$url = 'data.json';
$data = file_get_contents($url);
$characters = json_decode($data);

#echo($characters->title).'<br />';
#echo ($characters->year);

	var_dump($characters);
	echo '<br />';
	echo '<br />';
	print_r ($characters);
	echo '<br />';
	echo '<br />';
	echo $characters->dial->title;
	echo '<br />';
	echo '<br />';
	echo $characters->dial->url;
	echo '<br />';
	echo '<br />';
	echo $characters->dial->img;
	echo '<br />';
	echo '<br />';
	echo $characters->dialtwo->title;
	echo '<br />';
	echo '<br />';
	echo $characters->dialtwo->url;
	echo '<br />';
	echo '<br />';
	echo $characters->dialtwo->img;
?>
