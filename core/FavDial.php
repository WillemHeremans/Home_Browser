<?php

	class FavDial
	
	{
	  
		function createDial() 
		
			{
			
				$dialname = $_POST['add_dial'];
		
			// Creating db for new FavDial:
				
				try{
				$pdo = new PDO('sqlite:'.dirname(__PATH__).'/db/'.$dialname.'.sqlite');
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
			
				$file = './include/'.$dialname.'.php';
				$save = fopen($file, 'w+');
				$dial = '
				
	<div class="rang">
	
		<?php
		$dbname = "'.$dialname.'";
		include_once "./core/ConnectDB.php";
		$show_db = new ConnectDB;
		$show_db -> connect();
		?>
	
	
		<div class="content">
			<a title="Add content..." href="#'.$dialname.'"><img src="./img/add.svg" /></a>
			<p>Add</p>
		</div>
			<div class="modalLayer" id="'.$dialname.'">
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
							<input type="hidden" name="add_item" value="'.$dialname.'">
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


