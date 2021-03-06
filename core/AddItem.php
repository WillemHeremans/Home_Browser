<?php
	
	class AddItem 
	
	{
		function createItem () 
			
			{
				//Connection to dial's db:
				try
				{
				$pdo = new PDO('sqlite:'.dirname(__DIR__).'/db/home.sqlite');
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} 
				catch(Exception $e)
				{
				echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
				die();
				};
				
				//Fetching items datas:
				$table = $_POST['add_item'];
				$itemname = $_POST['titre'];
				
				//Renaming to obtain a valid and unique (id) modal name:
				$rename = preg_replace('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~!\\\\]/', $rand_id, $itemname);
				$rename = preg_replace('/\s+/', $rand_id, $rename);
				$rand_id = rand();
				$rename = $rename.$rand_id;
				
				//Insert item datas to dial's db:
				$phrase_sql = "INSERT INTO $table (titre, description, url, img, modal_name)
				VALUES (:titre, :description, :url, :img, :modal_name)";
				$preparation = $pdo->prepare($phrase_sql);
				$preparation->bindParam(':titre',$_POST['titre'],PDO::PARAM_STR);
				$preparation->bindParam(':description',$_POST['description'],PDO::PARAM_STR);
				$preparation->bindParam(':url',$_POST['url'],PDO::PARAM_STR);	
				$preparation->bindParam(':img',$_POST['img'],PDO::PARAM_STR);
				$preparation->bindParam(':modal_name',$rename,PDO::PARAM_STR);

				if ($preparation->execute()) {
					header('Location: index.php#home');
				} else {
					echo "OOOPS!";
				}
			
			}

	};

