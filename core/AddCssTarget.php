<?php
	
	class AddCssTarget
	
	{
		function modalAdd ()
		
		{
			
			foreach (glob("include/*.php") as $targetname)

				{
					$modal_add = str_replace(['include/', '.php', ' '], '', $targetname);
					$modal_item = $_POST['add_item'];
					
						echo "\n#$modal_add:target{display: block;}\n";
						echo "\n#settings$modal_item:target{display: block;}\n";
				}
		
		}
		
		function modalItem
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
					
					$tablename = ;
				
					$phrase_sql = "SELECT titre FROM $table;";
					$preparation = $pdo->prepare($phrase_sql);
					$preparation->execute();
					$data=$preparation->fetchAll( PDO::FETCH_ASSOC );
					
					foreach 
		
		
		}
	
	
	}
