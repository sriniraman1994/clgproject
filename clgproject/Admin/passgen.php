<?php
require "conect.inc.php";
if(isset($_POST['uname'])&&isset($_POST['pass'])){
$uname = $_POST['uname'];
$pass = $_POST['pass'];
$passhash = md5($pass);
$sql = "INSERT INTO `admin`.`services` (`uname`, `password`) VALUES ('$uname', '$passhash')";
if(mysql_query($sql)){
	echo "your credentials added";
}
}
							

?>
<form method="post" action="passgen.php">
	uname:<input type="text" name="uname">
	password:<input type="password" name="pass">
	<input type="submit" value="submit">
</form>