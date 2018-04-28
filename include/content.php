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
		<form method="post">
		
		      			<label>Title:</label>
		      			<input type="text" name="title"><br />
		     
		      			<label>Description:</label>
		      			<input type="text" name="description"><br />
		      			
		      			<label>url:</label>
		      			<input type="text" name="url"><br />
		      			
		      			<label>Icone:</label>
		      			<input type="text" name="img"><br />
		      			
		      			<input type="submit" />
		      			</form>
		</div>
		</div>

		</div>

		';

?>
