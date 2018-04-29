<?php
  
	include_once './core/FavDial.php';
	include_once './core/AddItem.php';
	require './require/header.php';
  
      		if (isset($_POST['add_dial'])) 
	      		
	      		{
	      		$add_dial = new FavDial;
	      		$add_dial -> createDial();
	      		
	      		} 
	      		
	      		if (isset($_POST['add_item'])) 
	      		
	      		{
	      		$add_dial = new AddItem;
	      		$add_dial -> createItem();
	      		
	      		} 
 		
		foreach (glob("include/*.php") as $filename)
			
			{
			    include $filename;
			}
		
	require './require/footer.php';


?>
