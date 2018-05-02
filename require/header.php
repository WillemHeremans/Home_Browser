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
				 <style>
				 ';
				 
		foreach (glob("include/*.php") as $targetname)

				{
				$css = str_replace(['include/', '.php'], '', $targetname);
					echo "\n#$css:target{display: block;}\n";
				};
								
	echo '
				 </style>
				 <title>Home</title>
			  </head>
		  		<body bgcolor="WhiteSmoke">
				  <div class="header">
					<ul>
		';
	    
    foreach (glob("db/*.sqlite") as $filename)
		
		{
		
			$name = str_replace(['db/', '.sqlite'], '', $filename);
		    echo '<li><a href="#'.$name.'">'.$name.'</a></li>';
		}
		
	echo '
					<li class="category"><a href="#add_dial">New category</a></li>
				</ul>
			</div>
		<div class="modalLayer" id="add_dial">
			<div class="popup_block">
				<a href="#home" class="croix">&#10006;</a>
					<form method="post">
						<label>Title:</label>
						<input type="text" name="add_dial"><br />
						<input type="submit" />
					</form>
			</div>
		</div>
		<div class="container" id="conteneur">
	';
	
?>
