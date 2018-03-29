<?php
	require "conect.inc.php";
	require "core.inc.php";
	
	if(login())
	{
			
		include "admin.php";
		
	}
	else
	{
	
		include "loginform.php";
	}
?>