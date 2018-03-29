<?php
$host = "localhost";
$name = "root";
$pass = "";
$mysqldb = 'account';
$error = "connection error! please try again later: ";
$query = "SELECT 'name' FROM 'users'";
if(mysql_connect($host,$name,$pass))
{
	
	mysql_select_db($mysqldb);
	
	
}
else 
{
	die($error);
}
?>