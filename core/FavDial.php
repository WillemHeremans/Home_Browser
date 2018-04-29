<?php

	class FavDial
	
	{
	  
		function createDial() 
		
			{
		
			// Creating db for new FavDial:
				
				try{
				$pdo = new PDO('sqlite:'.dirname(__PATH__).'/db/'.$_POST['add_dial'].'.sqlite');
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(Exception $e) {
				echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
				die();
			}


			$pdo->query("CREATE TABLE IF NOT EXISTS dial
				( 
				id            INTEGER         PRIMARY KEY AUTOINCREMENT,
				titre         VARCHAR( 250 ),
				description   VARCHAR( 250 ),
				url           VARCHAR( 250 ),
				img           VARCHAR( 250 )
				);"
				);
	
	
			//Adding new FavDial: 
	
				$file = './include/'.$_POST['add_dial'].'.php';
			
				$save = fopen($file, 'w+');
				$dial = '
	<div class="rang" id="'.$_POST['add_dial'].'">
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
							<input type="hidden" name="add_item" value="'.$_POST['add_dial'].'">
							<input type="submit" />
					</form>
			</div>
			</div>
	</div>';
				  
				fwrite($save, $dial);
				fclose($save);
			
				header('Location: index.php#home');

			}
	}


