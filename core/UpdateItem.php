<?php
		
	class UpdateItem
	
	{
		function editItem ()
		
		{
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
				
				$table = $_POST['update_item'];
				$itemname = $_POST['titre'];
				$rename = preg_replace('/\s+/', '', $itemname);
				$phrase_sql = "UPDATE $table SET titre=:titre, description=:description, url=:url, img=:img WHERE id=:item_id";
				$preparation = $pdo->prepare($phrase_sql);
				$preparation->bindParam(':titre',$_POST['titre'],PDO::PARAM_STR);
				$preparation->bindParam(':description',$_POST['description'],PDO::PARAM_STR);
				$preparation->bindParam(':url',$_POST['url'],PDO::PARAM_STR);	
				$preparation->bindParam(':img',$_POST['img'],PDO::PARAM_STR);
				$preparation->bindParam(':item_id',$_POST['item_id'],PDO::PARAM_STR);
				
				if ($preparation->execute()) 
				{
				header('Location: index.php#home');
				} 
				else 
				{
				echo "OOOPS!";
				}
						
		}
		
	}

