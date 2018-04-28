<?php
  
	include_once './core/FavDial.php';
	require './require/header.php';
  
      		if (isset($_POST['title'])) 
	      		
	      		{
	      		$add_dial = new FavDial;
	      		$add_dial -> createDial();
	      		
	      		} 
 		
		foreach (glob("include/*.php") as $filename)
			
			{
			    include $filename;
			}
		
	require './require/footer.php';


?>
