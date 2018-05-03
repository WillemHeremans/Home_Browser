<?php
		
	class DeleteItem
	
	{
		function delete ()
		
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
				$phrase_sql = "DELETE FROM $table WHERE id=:item_id";
				$preparation = $pdo->prepare($phrase_sql);
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
