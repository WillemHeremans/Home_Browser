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
			$rang_id = preg_replace('/\s+/', '', $name);
			$tab_id = chr(rand(65,90));
			
			if (isset($_COOKIE["$rang_id"])&&($_COOKIE["$rang_id"]) == 'hide')
			
			{ 
			
				$toggle_rang = 'display:none;';
				$toggle_tab =  'text-decoration:line-through;';
			
			}
			else
			{
			
				$toggle_rang = 'display:block;';
				$toggle_tab =  'text-decoration:none;';
				
			}
			
			
		    echo '<li><a style="'.$toggle_tab.'" href="#'.$rang_id.'" onclick="if(document.getElementById('."`$rang_id`".').style.display === '."`none`".'){document.getElementById('."`$rang_id`".').style.display = '."`block`".'; this.style.textDecoration = '."`none`".'; document.cookie = '."`$rang_id=unhide`".';}else{document.getElementById('."`$rang_id`".').style.display = '."`none`".'; this.style.textDecoration = '."`line-through`".'; document.cookie = '."`$rang_id=hide`".';}">'.$name.'</a></li>';
		    
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
