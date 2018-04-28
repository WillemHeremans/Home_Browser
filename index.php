<?php
  
	include_once './core/FavDial.php';
	require './require/header.php';
  
      		if (isset($_GET['add'])) 
      		
      		{
      		
	      		$add_dial = new FavDial;
	      		
		      		echo '
		      			<div class="container" id="conteneur">
		      			<form action="" method="post" id="test">
		      			<label>Title:</label>
		      			<input type="text" name="title"></input><br />
		      			<input type="submit" />
		      			</form>
		      			</div>
		      			
		      			';
	      		
	      		if (isset($_POST['title'])) 
	      		
	      		{
	      		
	      		$add_dial -> createDial();
	      		
	      		}
      		
      		}
      		
      		else 
 		
		foreach (glob("include/*.php") as $filename)
			
			{
			    include $filename;
			}
		
	require './require/footer.php';


?>
