<?php
require "conect.inc.php";
$sql = "select * from `addservice`";
if($result =  mysql_query($sql))
{
	$count = 1;
	while ($row = mysql_fetch_array($result))
	{
		$query_num_rows = mysql_num_rows($result);
			if ($query_num_rows == 0)
			{
				echo "no services to display";

			}

		echo " <table><tr><td></table>".$count;
		echo "<table ><tr><td><center><b><a href=#>{$row['service']}</a></b></center></tr></table>";
		echo "<br />";
		$count++;
    }
}
?>