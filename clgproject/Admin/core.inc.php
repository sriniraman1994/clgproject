<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
{
	$http_referer = $_SERVER['HTTP_REFERER'];
}

function login()
{
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
		$id="user_id";
		return true;

	}
	else
	{
		return false;
	}
}

?>