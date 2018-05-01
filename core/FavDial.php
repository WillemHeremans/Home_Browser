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
			
				
				$dialname = $_POST['add_dial'];
				$file = './include/'.$dialname.'.php';
				$save = fopen($file, 'w+');
				$dial = '
				<?php
				$dbname = "'.$dialname.'";
				try
			
					{
					$pdo = new PDO(\'sqlite:\'.dirname(__DIR__).\'/db/\'.$dbname.\'.sqlite\');
					$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} 
					catch(Exception $e)
					{
					echo "Impossible d\'accéder à la base de données SQLite : ".$e->getMessage();
					die();
					};
				
					$phrase_sql = "SELECT * FROM dial;";
					$preparation = $pdo->prepare($phrase_sql);
					$preparation->execute();
					$data=$preparation->fetchAll( PDO::FETCH_ASSOC );
				?>
	<div class="rang">
	<?php foreach ($data as $data):?>
				<div class="content">
				<a title="<?php echo $data[\'description\']?>" href="http://<?php echo $data[\'url\']?>"><img src="<?php echo $data[\'img\']?>" /></a>
				<p><?php echo $data[\'titre\']?></p>
			</div>
			<?php endforeach?>
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

