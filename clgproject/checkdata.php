<?php
require "conect.inc.php";
if(isset($_POST['uname'])){
	$uname=$_POST['uname']);
	$sql =  "SELECT * FROM `users` WHERE name='$uname'";
					$query_run = mysql_query($sql);

					if ( mysql_num_rows($query_run) == 1)
					{
						echo '<p style = "color:red">username is already registered';
					}
					else{
						echo "ok";
					}
}
?>