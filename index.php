<?php
  
	include_once './core/AddDial.php';
	include_once './core/AddItem.php';
	require './require/header.php';
  
      		if (isset($_POST['add_dial'])) 
	      		
	      		{
	      		$add_dial = new AddDial;
	      		$add_dial -> createDial();
	      		
	      		} 
	      		
	      		if (isset($_POST['add_item'])) 
	      		
	      		{
	      		$add_item = new AddItem;
	      		$add_item -> createItem();
	      		
	      		} 
 		
		foreach (glob("include/*.php") as $filename)
			
			{
			    include $filename;
			}
		
	require './require/footer.php';


?>
