<?php
	
	class ConnectDB 
	
	{
	
		function connect ()
		
		{
			global $dbname;
			try
			
					{
					$pdo = new PDO('sqlite:'.dirname(__DIR__).'/db/'.$dbname.'.sqlite');
					$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
					$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} 
					catch(Exception $e)
					{
					echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
					die();
					};
				
					$phrase_sql = "SELECT * FROM dial;";
					$preparation = $pdo->prepare($phrase_sql);
					$preparation->execute();
					$data=$preparation->fetchAll( PDO::FETCH_ASSOC );
		
		}
		
	
	
	
	};




