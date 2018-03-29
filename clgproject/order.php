<head>
<style type="text/css">
h1
{
	color:green;
	font-size:20px;
}
p
{
	color:red;
	font-size:18px;

}
</style>
</head> 
<title>order</title>
<hr/>
</head>
<body>
	<?php
	$loginname;
	if (isset($_SESSION['user_id']))
	{

		$id = $_SESSION['user_id'];
	 	$sql ="select cusname from `users` where id='$id'";
	 	if (mysql_query($sql))
	 		{
	 			$query_run = mysql_query($sql);
	 			if(mysql_num_rows($query_run))
	 			{
	 				while($name = mysql_fetch_assoc($query_run))
	 				{
	 					$loginname = $name['cusname'];
	 					echo '<center><p style="color:green;size=12px">welcome  '.$loginname;
	 				}

	 			}
	 		}
	 	}
	 	
	 
?>

	

	<hr/>
<marquee>kindly select an option for order </marquee>
<p>
	<center>
	Quick menu product:<br><br>
	<a href="food.php">Food</a><br>
	<a href="medicine.php">medicine</a><br>
	<a href="provisional.php">provisionals</a><br>
	<a href="devotionalshopping.php">devotionalshopping</a></br>
	<a href="festiveshopping.php">festivephp</a><br><br><br>
	Specific order menu:<br><br>
	<a href="specific.php">make specific order</a><br><br><br><br>

	Services menu:<br><br>

	<a href="getpetrol.php">orderpetrolonline</a><br>
	<a href="getmechanic.php">Getmechanic</a><br>
	<a href="getelectrician.php">getelectrician</a><br>
	<a href="getplumber.php">getplumber</a><br>
	</center>
</p>

</body>
<?php




 	echo '<center><a href="logout.php">logout</a></center>';
?>
