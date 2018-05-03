<?php
	
	class DisplayItems 
	
	{
	
		function display ()
		
		{
			global $tablename;
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
				
					$phrase_sql = "SELECT * FROM $tablename;";
					$preparation = $pdo->prepare($phrase_sql);
					$preparation->execute();
					$data=$preparation->fetchAll( PDO::FETCH_ASSOC );
					
					foreach ($data as $data)			
					{
					echo '
					<style>
					#settings'.$data['modal_name'].':target{
					display: block;}
					</style>
					<div class="content">
						<a href="#settings'.$data['modal_name'].'" class="settings">&#9776;</a>
						<a title="'.$data['description'].'" href="http://'.$data['url'].'"><img src="'.$data['img'].'" /></a>
						<p>'.$data['titre'].'</p>
					</div>
					
					<div class="modalLayer" id="settings'.$data['modal_name'].'">
			<div class="popup_block">
				<h1>Update or delete item <a href="#home" class="croix">&#10006;</a></h1>
					<form method="post" id="content">
						<label>Titre:</label>
							<input type="text" name="titre" value="'.$data['titre'].'"><br />
						<label>Description:</label>
							<input type="text" name="description" value="'.$data['description'].'"><br />
						<label>url:</label>
							<input type="text" name="url" value="'.$data['url'].'"><br />
						<label>Icone:</label>
							<input type="text" name="img" value="'.$data['img'].'"><br />
							<input type="hidden" name="update_item" value="'.$tablename.'">
							<input type="hidden" name="item_id" value="'.$data['id'].'">
							<input type="submit" name="update" value="update"/>
							<input type="submit" name="delete" value="delete"/>
					</form>
			</div>
			</div>
					';
					}
		
		}
		
	};

