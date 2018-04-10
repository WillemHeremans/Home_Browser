<?php

	$url = 'members.json';
$data = file_get_contents($url);
$characters = json_decode($data);

#echo($characters->title).'<br />';
#echo ($characters->year);

var_dump($characters);
	
?>
