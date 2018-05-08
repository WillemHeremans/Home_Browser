<?php
		
	class UpdateDial
	
	{
		function editDial ()
		
		{
			$oldname = $_POST['dial_name'];
			$newname = $_POST['update_dial'];
			
			$adapt = str_replace('/', '_(_', $oldname);
			$adapt = str_replace('\\', '_)_', $adapt);
			
			$rename = str_replace('/', '_(_', $newname);
			$rename = str_replace('\\', '_)_', $rename);
			
			$str=file_get_contents('./include/'.$adapt.'.php');
			$str=str_replace('$dialename = "'.$oldname.'"', '$dialename = "'.$newname.'"',$str);
			file_put_contents('./include/'.$adapt.'.php', $str);
			
			rename ("./include/$adapt.php", "./include/$rename.php");
			
			header('Location: index.php#home');
						
		}
		
	}

