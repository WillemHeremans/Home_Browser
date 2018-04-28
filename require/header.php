<?php
	
	echo '
		<!DOCTYPE html>
	  	<html lang="fr">

	  <head>
	     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	     <meta charset="UTF-8"/>
	     <link rel="icon" type="image/png" href="./img/firefox.png">
	     <link rel="stylesheet" href="./css/main.css"/>
	     <title>Home</title>

	  </head>

	  <body bgcolor="WhiteSmoke">


	  <div class="header">
	    <ul>
	      <li><a href="#11">1</a></li>
	      <li><a href="#news">2</a></li>
	      <li><a href="#contact">3</a></li>
	      <li class="category"><a href="#add_dial">New category</a></li>
	    </ul>
	  </div>
	  
	  <div class="modalLayer" id="add_dial">
		<div class="popup_block">
		<a href="#home" class="croix">&#10006;</a>
		      			<form method="post">
		      			<label>Title:</label>
		      			<input type="text" name="title"><br />
		      			<input type="submit" />
		      			</form>
		</div>
		</div>
	  
	  <div class="container" id="conteneur">
	';



?>
