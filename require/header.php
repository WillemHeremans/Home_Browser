<?php

	echo '
			<!DOCTYPE html>
		  	<html lang="fr">
			  <head>
				 <meta name="viewport" content="width=device-width, initial-scale=1.0">
				 <meta charset="UTF-8"/>
				 <link rel="icon" type="image/png" href="./img/firefox.png">
				 <link rel="stylesheet" href="./css/main.css"/>
				 <style>
				  
						   	

						#modalCheck{
						display: none;
						}
						
						.modalLayer{
						  overflow: auto;
						  display: none;
						  position: fixed;
						  top: 0;
						  bottom: 0;
						  left: 0;
						  right: 0;
						  background-color: rgba(0, 0, 0, 0.5);
						}';
						foreach (glob("include/*.php") as $targetname)
			
								{
								$css = str_replace(['include/', '.php'], '', $targetname);
									echo "\n#$css:target{display: block;}\n";
								};
								echo '
						 #add_dial:target, #add_item:target{
						display: block;
						}
						.popup_block{
						  background: rgba(230, 230, 250, 0.7);
						  padding: 20px;
						  border: 0 solid rgb(219, 54, 174, 0.4);
						  position: relative;
						  margin: 5% auto;
						  width: 60%;
						  box-shadow: 0px 0px 20px #000;
						  border-radius: 10px;
						}
						img.btn_close {
						float: right;
						margin: -55px -55px 0 0;
						cursor: pointer;
						}

						.button{
						cursor: pointer;
						color: blue;
						text-decoration: underline;
						}
						/* Modal Box end */ 

				 
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
