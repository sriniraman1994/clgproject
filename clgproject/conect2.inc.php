<?php
$host = "localhost";
$name = "root";
$pass = "";
$mysqldb = 'admin';
$error = "connection error! please try again later: ";
if(mysql_connect($host,$name,$pass))
{
	
	mysql_select_db($mysqldb);
	
	
}
else 
{
	die($error);
}
?>