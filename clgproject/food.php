<?php
require "core.inc.php";
require "conect1.inc.php";

 if(login())
 {
         if (isset($_POST['name'])&&isset($_POST['option'])&&isset($_POST['order'])&&isset($_POST['qty'])&&isset($_POST['hotel'])&&isset($_POST['phno'])&&isset($_POST['email'])&&isset($_POST['addr'])&&isset($_POST['mode']))
          {
             $name = $_POST['name'];
             $option = $_POST['option'];
             $order = $_POST['order'];
             $qty = $_POST['qty'];
             $hotel = $_POST['hotel'];
             $phno = $_POST['phno'];
             $email = $_POST['email'];
             $addr = $_POST['addr'];
             $mode = $_POST['mode'];

              if (!empty($name)&&!empty($option)&&!empty($qty)&&!empty($hotel)&&!empty($phno)&&!empty($email)&&!empty($addr)&&!empty($mode))
               {
                   $query = "INSERT INTO `food` VALUES ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($option)."','".mysql_real_escape_string($order)."','".mysql_real_escape_string($qty)."','".mysql_real_escape_string($hotel)."','".mysql_real_escape_string($phno)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($addr)."','".mysql_real_escape_string($mode)."')";
                   if (mysql_query($query))
                   {

                             header("location:ordersuccess.php");

                    }
                   else
                   {
                     echo '<script type="text/javascript">alert("your order cannot be taken due to technical error!try again later!");</script>';
                   }
             }

         }
         else
             {
                 echo '<script type="text/javascript">alert("All fields are required!")</script>';

             }

 }
 else
 {
          echo '<script type="text/javascript">alert("you must login first");</script>';

 }
?>

<html>
<head><title>food</title>
<style type="text/css">
.rowstyle
{
  padding-top:20px;
}
</style>


</head>

 <body>

<html>
 <h1><center>welcome to food menu</center><h1>
 <hr/>
 
<center>
<font size="18px" color="green"  >   </font>
<p>please fill in proper details</p>
<form action="food.php" method="POST">
<table>
<tr><td>Name:<input type="text" name="name" ><br></td></tr>
<tr><td class="rowstyle" >Option:<input type="radio" name="option" value="veg">veg</td>
<td class="rowstyle"><input type="radio" name="option" value="Nonveg">Nonveg</td>
</tr>
<tr><td class="rowstyle">Yourorder:<textarea name="order" rows="5" cols="20" ></textarea></td></tr><br>

<tr><td class="rowstyle">foodQtty:<input type="text" name="qty"></td></tr>
<tr><td class="rowstyle">hotel name:<select name="hotel">
	<option value="saravanabhavan">saravanabhavan</option>
	<option value="a2b">Adyar anandbhavan</option>
	<option value="mmh">mangalam militry hotel</option>
	<option value="any">any hotel</option>
	</select></tr></td>
<tr><td class="rowstyle">yourph.no:<input type="text" name="phno"></td></tr>
<tr><td class="rowstyle">youremail:<input type="text" name="email"></td></tr>
<tr><td class="rowstyle">yourAddr:<textarea name="addr" rows="5" cols="20" ></textarea></td></tr>
<tr><td class="rowstyle">DeliveryMode:<input type="radio" name="mode" value="normal">normal</td>
<td class="rowstyle"><input type="radio" name="mode" value="medium">medium</td>
<td class="rowstyle"><input type="radio" name="mode" value="quick">quick</td>
</tr>

<tr><td class="rowstyle"><input type="submit"value="submit"></td>
<td class="rowstyle"><input type="reset"value="reset"></td>
</tr>
</table>
</center>
</form>

</body>