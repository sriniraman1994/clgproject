<?php
require "core.inc.php";
require "conect1.inc.php";
$query = "select * from 'food'";
if(mysql_query($query))
{
	echo "ok";
}
?>
<center><b>Congratz!Your order has been successfully registerd</b></center>
<p style="color:green;size:20px">you will recieve a call shortly to confirm your order</p>
<a href="order.php">continue</a>
