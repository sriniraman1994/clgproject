<?php
	require "conect.inc.php";
	require "core.inc.php";
	
	if(login())
	{
			
		include "services.php";
		
	}
	else
	{
	
		include "loginform.php";
	}
?>