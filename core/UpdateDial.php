<?php
		
	class UpdateDial
	
	{
		function editDial ()
		
		{
			$oldname = $_POST['dial_name'];
			$newname = $_POST['update_dial'];
			
			$rename = str_replace('/', '_(_', $newname);
			$rename = str_replace('\\', '_)_', $rename);
			
			$str=file_get_contents('./include/'.$oldname.'.php');
			$str=str_replace('$dialename = "$oldname"', '$dialename = "$newname"', $str);
			file_put_contents('./include/'.$oldname.'.php', $str);
			
			rename ("./include/$oldname.php", "./include/$rename.php");
			
			header('Location: index.php#home');
						
		}
		
	}

