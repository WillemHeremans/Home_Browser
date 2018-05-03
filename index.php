<?php
  
	include_once './core/AddDial.php';
	include_once './core/AddItem.php';
	include_once './core/UpdateItem.php';
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
	      		
	      		if (isset($_POST['update'])) 
	      		
	      		{
	      		$update_item = new UpdateItem;
	      		$update_item -> editItem();
	      		
	      		} 
 		
		foreach (glob("include/*.php") as $filename)
			
			{
			    include $filename;
			}
		
	require './require/footer.php';

?>
