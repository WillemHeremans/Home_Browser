<?php
	
	echo '
		<div class="rang">

		<div class="content">
		<a title="Go to..." href="https://facebook.com"><img src="./img/facebook.png" /></a>
		<p>Exemple</p>
		</div>
		
		<div class="content">
		<a title="Add content..." href="#add_item"><img src="./img/add.svg" /></a>
		<p>Add</p>
		</div>
		
		<div class="modalLayer" id="add_item">
		<div class="popup_block">
		<a href="#home" class="croix">&#10006;</a>
		<form action="" method="post" id="test">
		
		      			<label>Title:</label>
		      			<input type="text" name="title"></input><br />
		     
		      			<label>Description:</label>
		      			<input type="text" name="description"></input><br />
		      			
		      			<label>url:</label>
		      			<input type="text" name="url"></input><br />
		      			
		      			<label>Icone:</label>
		      			<input type="text" name="img"></input><br />
		      			
		      			<input type="submit" />
		      			</form>
		</div>
		</div>

		</div>

		';

?>
