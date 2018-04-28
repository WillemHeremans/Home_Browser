<?php

	class FavDial
	
	{
	  
		function createDial() 
		
			{
		
			// Creating db for new FavDial:
				
				try{
				$pdo = new PDO('sqlite:'.dirname(__PATH__).'/db/'.$_POST['title'].'.sqlite');
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(Exception $e) {
				echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
				die();
			}


			$pdo->query("CREATE TABLE IF NOT EXISTS dial ( 
				id            INTEGER         PRIMARY KEY AUTOINCREMENT,
				titre         VARCHAR( 250 ),
				description   VARCHAR( 250 ),
				url           VARCHAR( 250 ),
				img           VARCHAR( 250 )
			
			);");
	
	
			//Adding new FavDial: 
	
				$file = './include/'.$_POST['title'].'.php';
			
				$save = fopen($file, 'w+');
				$dial = '
				<div class="rang">

					<div class="content">
					<a title="Add content..." href="#"><img src="./img/add.svg" /></a>
					<p>Add</p>

					</div>

				</div>';
				  
				fwrite($save, $dial);
				fclose($save);
			
				header('Location: index.php');
		
	
	

			}
	}


