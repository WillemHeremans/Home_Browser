<?php
	try
					{
					$pdo = new PDO('sqlite:'.dirname(__DIR__).'/db/App\'s.sqlite');
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

	echo '<div class="rang" id="App\'s">';
	
	foreach ($data as $data) 
	
	{
	
		echo '
		
				<div class="content">
				<a title="'.$data['description'].'" href="http://'.$data['url'].'"><img src="'.$data['img'].'" /></a>
				<p>'.$data['titre'].'</p>
			</div>
		
		';
	
	}
	
	echo '
			<div class="content">
				<a title="Add content..." href="#add_item"><img src="./img/add.svg" /></a>
				<p>Add</p>
			</div>
				<div class="modalLayer" id="add_item">
				<div class="popup_block">
					<a href="#home" class="croix">&#10006;</a>
						<form method="post">
							<label>Title:</label>
								<input type="text" name="title"><br />
							<label>Description:</label>
								<input type="text" name="description"><br />
							<label>url:</label>
								<input type="text" name="url"><br />
							<label>Icone:</label>
								<input type="text" name="img"><br />
								<input type="hidden" name="add_item" value="App\'s">
								<input type="submit" />
						</form>
				</div>
				</div>
		</div>
	';
?>
