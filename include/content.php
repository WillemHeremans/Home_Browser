<?php
	
	echo '
	<div class="rang">
		<div class="content">
		<a href="#settings" class="settings">&#9776;</a>
		<a title="Go to..." href="https://facebook.com"><img src="./img/facebook.png" /></a>
		<p>Exemple</p>
		</div>
			<div class="add">
			<a title="Add content..." href="#add_item"><img src="./img/add.svg" /></a>
			</div>
			<div class="modalLayer" id="add_item">
			<div class="popup_block">
				
				<h1>Add an item<a href="#home" class="croix">&#10006;</a></h1>
					<form method="post" id="content">
						<label>Title:</label>
							<input type="text" name="title"><br />
						<label>Description:</label>
							<input type="text" name="description"><br />
						<label>url:</label>
							<input type="text" name="url"><br />
						<label>Icone:</label>
							<input type="text" name="img"><br />
							<input type="hidden" name="add_item" value="content">
							<input type="submit" />
					</form>
			</div>
			</div>
			
			<div class="modalLayer" id="settings">
			<div class="popup_block">
				<a href="#home" class="croix">&#10006;</a>
				<h1>Update or delete item</h1>
					<form method="post" id="content">
						<label>Title:</label>
							<input type="text" name="title"><br />
						<label>Description:</label>
							<input type="text" name="description"><br />
						<label>url:</label>
							<input type="text" name="url"><br />
						<label>Icone:</label>
							<input type="text" name="img"><br />
							<input type="hidden" name="add_item" value="content">
							<input type="submit" />
					</form>
			</div>
			</div>
			
	</div>
		';

?>
