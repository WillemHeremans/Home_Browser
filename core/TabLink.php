<?php
	
	class TabLink
	{
		
		function link()
		{
			
			foreach (glob("include/*.php") as $filename)
			{
		
				$name = str_replace(['include/', '.php'], '', $filename);
				$name = str_replace('_(_', '/', $name);
				$name = str_replace('_)_', '\\', $name);
				$rang_id = preg_replace('/\s+/', '', $name);
				$tab_id = chr(rand(65,90));
			
				if (isset($_COOKIE["$rang_id"])&&($_COOKIE["$rang_id"]) == 'hide')
			
				{ 
			
					$toggle_rang = 'display:none;';
					$toggle_tab =  'text-decoration:line-through;';
			
				}
				else
				{
			
					$toggle_rang = 'display:block;';
					$toggle_tab =  'text-decoration:none;';
				
				}
			
			
				echo '<li><a style="'.$toggle_tab.'" href="#'.$rang_id.'" onclick="if(document.getElementById('."`$rang_id`".').style.display === '."`none`".'){document.getElementById('."`$rang_id`".').style.display = '."`block`".'; this.style.textDecoration = '."`none`".'; document.cookie = '."`$rang_id=unhide`".';}else{document.getElementById('."`$rang_id`".').style.display = '."`none`".'; this.style.textDecoration = '."`line-through`".'; document.cookie = '."`$rang_id=hide`".';}">'.$name.'</a></li>';
			}
		
		}
	}
