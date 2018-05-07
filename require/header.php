<?php

	echo '
			<!DOCTYPE html>
		  	<html lang="fr">
			  <head>
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <meta charset="UTF-8"/>
				 <link rel="icon" type="image/png" href="./img/firefox.png">
				 <link rel="stylesheet" href="./css/main.css"/>
				 <link rel="stylesheet" href="./css/modal.css"/>
				 <title>Home</title>
			  </head>
		  		<body bgcolor="WhiteSmoke">
				  <div class="header">
					<ul>
		';
	    
    foreach (glob("include/*.php") as $filename)
		
		{
		
			$name = str_replace(['include/', '.php'], '', $filename);
			$name = str_replace('_(_', '/', $name);
			$name = str_replace('_)_', '\\', $name);
			$modal_id = preg_replace('/\s+/', '', $name);
		    echo '<li><a href="#'.$modal_id.'" onclick="if(document.getElementById('."`$modal_id`".').style.display === '."`none`".'){document.getElementById('."`$modal_id`".').style.display = '."`block`".'}else{document.getElementById('."`$modal_id`".').style.display = '."`none`".'}">'.$name.'</a></li>';
		}
		
	echo '
					<li class="category"><a href="#add_dial">New category</a></li>
				</ul>
			</div>
		<div class="modalLayer" id="add_dial">
			<div class="popup_block">
				<h1>Add a category: <a class="croix" href="#home">&#10006;</a></h1>
					<form method="post">
						<label>Title:</label>
						<input type="text" name="add_dial"><br />
						<input type="submit" value="Add" />
					</form>
			</div>
		</div>
		<div class="container" id="conteneur">
	';
	
?>
