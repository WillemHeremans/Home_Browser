<?php
	
	class AddItem 
	
	{
		function createItem () 
			
			{
				try
				{
				$pdo = new PDO('sqlite:'.dirname(__DIR__).'/db/'.$_POST['add_item'].'.sqlite');
				$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} 
				catch(Exception $e)
				{
				echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
				die();
				};
				
				$phrase_sql = "INSERT INTO dial (titre, description, url, img)
    VALUES (:titre, :description, :url, :img)";
	$preparation = $pdo->prepare($phrase_sql);

	$preparation->bindParam(':titre',$_POST['title'],PDO::PARAM_STR);
	$preparation->bindParam(':description',$_POST['description'],PDO::PARAM_STR);
	$preparation->bindParam(':url',$_POST['url'],PDO::PARAM_STR);	
	$preparation->bindParam(':img',$_POST['img'],PDO::PARAM_STR);


	if ($preparation->execute()) {
		header('Location: index.php#home');
	} else {
		echo "OOOPS!";
	}
			
			
			}

	};

