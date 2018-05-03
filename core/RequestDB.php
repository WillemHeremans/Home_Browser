<?php
	
	class RequestDB 
	
	{
	
		function request ()
		
		{
			global $dbname;
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
				
					$phrase_sql = "SELECT * FROM $dbname;";
					$preparation = $pdo->prepare($phrase_sql);
					$preparation->execute();
					$data=$preparation->fetchAll( PDO::FETCH_ASSOC );
					
					foreach ($data as $data)			
					{
					echo '
					<div class="content">
						<a href="#settings'.$dbname.'" class="settings">&#9776;</a>
						<a title="'.$data['description'].'" href="http://'.$data['url'].'"><img src="'.$data['img'].'" /></a>
						<p>'.$data['titre'].'</p>
					</div>
					
					<div class="modalLayer" id="settings'.$dbname.'">
			<div class="popup_block">
				<a href="#home" class="croix">&#10006;</a>
					<form method="post" id="content">
						<label>Titre:</label>
							<input type="text" name="titre" value="'.$data['titre'].'"><br />
						<label>Description:</label>
							<input type="text" name="description" value="'.$data['description'].'"><br />
						<label>url:</label>
							<input type="text" name="url" value="'.$data['url'].'"><br />
						<label>Icone:</label>
							<input type="text" name="img" value="'.$data['img'].'"><br />
							<input type="hidden" name="add_item" value="content">
							<input type="submit" />
					</form>
			</div>
			</div>
					';
					}
		
		}
		
	};

