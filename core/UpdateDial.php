<?php
		
	class UpdateDial
	
	{
		function editDial ()
		
		{
			$oldname = $_POST['dial_name'];
			$newname = $_POST['update_dial'];
			
			$str=file_get_contents("./include/$oldname.php");
			$str=str_replace("$dialename = ".$oldname."", "$dialename = ".$newname."",$str);
			file_put_contents("./include/$oldname.php", $str);
			
			rename ("./include/$oldname.php", "./include/$newname.php");
			
			header('Location: index.php#home');
						
		}
		
	}

