<?php

	class AddDial
	
	{
	  
		function createDial() 
		
			{
			
				$dialname = $_POST['add_dial'];
				$modal_id = preg_replace('/\s+/', '', $dialname);
		
			// Creating db for new Dial:
				
				try{
				$pdo = new PDO('sqlite:'.dirname(__DIR__).'/db/home.sqlite');
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(Exception $e) {
				echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
				die();
			}


			$pdo->query("CREATE TABLE IF NOT EXISTS $modal_id
				( 
				id            INTEGER         PRIMARY KEY AUTOINCREMENT,
				titre         VARCHAR( 250 ),
				description   VARCHAR( 250 ),
				url           VARCHAR( 250 ),
				img           VARCHAR( 250 )
				);"
				);
	
	
			//Adding file for new Dial: 
			
				$file = './include/'.$dialname.'.php';
				$save = fopen($file, 'w+');
				$dial = '
							<div class="rang">
	
							<?php
							$dbname = "'.$modal_id.'";
							include_once "./core/RequestDB.php";
							$show_db = new RequestDB;
							$show_db -> request();
							?>

							<div class="content">
								<a title="Add content..." href="#'.$modal_id.'"><img src="./img/add.svg" /></a>
								<p>Add</p>
							</div>
								<div class="modalLayer" id="'.$modal_id.'">
									<div class="popup_block">
										<a href="#home" class="croix">&#10006;</a>
											<form method="post">
												<label>Titre:</label>
													<input type="text" name="titre"><br />
												<label>Description:</label>
													<input type="text" name="description"><br />
												<label>url:</label>
													<input type="text" name="url"><br />
												<label>Icone:</label>
													<input type="text" name="img"><br />
													<input type="hidden" name="add_item" value="'.$modal_id.'">
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

