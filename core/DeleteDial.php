<?php
		
	class DeleteDial
	
	{
		function delete ()
		
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
			
			$table = $_POST['table'];
			$file = $_POST['file'];
			$phrase_sql = "DROP table $table";
			$preparation = $pdo->prepare($phrase_sql);
			
			if ($preparation->execute()) 
			{
			unlink('./include/'.$file.'.php');
			header('Location: index.php#home');
			} 
			else 
			{
			echo "OOOPS!";
			}
						
		}
		
	}
