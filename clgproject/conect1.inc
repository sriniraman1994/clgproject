<?php
$host = "localhost";
$name = "root";
$pass = "";
$mysqldb = 'order';
$error = "connection error! please try again later: ";
$query = "SELECT 'name' FROM 'users'";
if(mysql_connect($host,$name,$pass))
{
	echo "connected";
	if(mysql_select_db($mysqldb))
	{
		echo "database found";
	}
	
}
else 
{
	die($error);
}
?>