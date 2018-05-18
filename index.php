<?php
  
	include_once './core/AddDial.php';
	include_once './core/AddItem.php';
	include_once './core/UpdateItem.php';
	include_once './core/DeleteItem.php';
	include_once './core/UpdateDial.php';
	include_once './core/DeleteDial.php';
	
	require './require/header.php';
  
		if (isset($_POST['add_dial'])) 

		{
		$add_dial = new AddDial;
		$add_dial -> createDial();
		} 
		
		if (isset($_POST['rename_dial'])) 

		{
		$update_dial = new UpdateDial;
		$update_dial -> editDial();
		} 
		
		if (isset($_POST['delete_dial'])) 

		{
		$delete_dial = new DeleteDial;
		$delete_dial -> delete();
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

		if (isset($_POST['delete'])) 

		{
		$delete_item = new DeleteItem;
		$delete_item -> delete();
		} 

		foreach (glob("include/*.php") as $filename)

		{
		include $filename;
		}

		require './require/footer.php';

?>
