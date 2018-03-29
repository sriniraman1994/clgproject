<?php
	if(isset($_POST['shop']))
	{
		$shop = $_POST['shop'];
		echo $shop;
	}
	
?>
<center><font color="green" size ="13"> Welcome to Getit24-7</font></center>
<hr/>
<center><font color="red" size>PLEASE FILL IN YOUR DETAILS:</font></center><br>
<form action="welcome.php" method="POST">
Name:<input type="text" name="uname">

<select name="shop">
<option value="saravanastr">saravana stores</option>
<option value="silsteels">silversteels</option>
</select>
<input type="submit" value="submit">
</form>
	