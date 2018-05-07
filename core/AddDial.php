<?php

	class AddDial
	
	{
	  
		function createDial() 
		
			{
			
				$dialename = $_POST['add_dial'];
				$filename = str_replace('/', '_(_', $dialename);
				$filename = str_replace('\\', '_)_', $filename);
				
				$rand_id = rand(7, 77);
				
				$rename = preg_replace('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~!°\\\\]/', 'w', $filename);
				$rename = preg_replace('/\s+/', '_', $rename);
				$rename = $rename.$rand_id;
				
				$dial_id = $_POST['add_dial'];
				$dial_id = preg_replace('/\s+/', '', $dial_id);
				
				
		
			// Creating db for new Dial:
				
				try{
				$pdo = new PDO('sqlite:'.dirname(__DIR__).'/db/home.sqlite');
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(Exception $e) {
				echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
				die();
			}


			$pdo->query("CREATE TABLE IF NOT EXISTS $rename
				( 
				id            INTEGER         PRIMARY KEY AUTOINCREMENT,
				titre         VARCHAR( 250 ),
				description   VARCHAR( 250 ),
				url           VARCHAR( 250 ),
				img           VARCHAR( 250 ),
				modal_name    VARCHAR( 250 )
				);"
				);
	
	
			//Adding file for new Dial: 
			
				$file = './include/'.$filename.'.php';
				$save = fopen($file, 'w+');
				$dial = '
							<div class="rang" id="'.$dial_id.'">
	
							<?php
							$tablename = "'.$rename.'";
							include_once "./core/DisplayItems.php";
							$show_db = new DisplayItems;
							$show_db -> display();
							$dialename = "'.$dialename.'";
							?>
							<style>
							#'.$rename.':target{display: block;}
							#settings'.$rename.':target{display: block;}
							</style>

							<div class="add">
								<a href="#settings'.$rename.'" class="settings">&#9776;</a>
								<a title="Add an item" href="#'.$rename.'"><img src="./img/add.svg" /></a>
								<p><?php echo $dialename ?></p>
							</div>
								<div class="modalLayer" id="'.$rename.'">
									<div class="popup_block">
									<h1>Add an item <a href="#home" class="croix">&#10006;</a></h1>
											<form method="post">
												<label>Titre:</label>
													<input type="text" name="titre"><br />
												<label>Description:</label>
													<input type="text" name="description"><br />
												<label>url:</label>
													<input type="text" name="url"><br />
												<label>Icone:</label>
													<input type="text" name="img"><br />
													<input type="hidden" name="add_item" value="'.$rename.'">
													<input type="submit" />
											</form>
									</div>
								</div>
								<div class="modalLayer" id="settings'.$rename.'">
									<div class="popup_block">
									<h1>Rename or delete category<a href="#home" class="croix">&#10006;</a></h1>
									<form method="post">
									<label>Titre:</label>
							<input type="text" name="update_dial" value="<?php echo $dialename ?>"><br />
									<input type="hidden" name="dial_name" value="<?php echo $dialename ?>">
									<input type="submit" name="rename_dial" value="Rename"/>
									<input type="submit" name="delete_dial" value="Delete"/>
									</form>
									</div>
								</div>
						</div>';
				  
				fwrite($save, $dial);
				fclose($save);
			
				header('Location: index.php#home');

			}
	}

