<?php
	require conect.inc.php;
	if(isset($_POST["first name"])&&isset($_POST["last name"])&&isset($_POST["gender"])&&isset($_POST["DEPARTMENT"])&&isset($_POST["year"])&&isset($_POST["college name"]&&isset($_POST["college place"])&&isset($_POST["event"]))
	{
		
		$firstname = $_POST["first name"];
		$lastname = $_POST["last name"];
		$gender = $_POST["gender"];
		$department = $_POST["DEPARTMENT"];
		$year = $_POST["year"];
		$collegename = $_POST["college name"];
		$collegeplace = $_POST["college place"];
		$event = $_POST["event"];
		
		
		if(!empty($firstname)&&!empty($lastname)&&!empty($gender)&&!empty($department)&&!empty($year)&&!empty($collegename)&&!empty($collegeplace)&&!empty($events))
		{
			 $sql= "INSERT INTO `` VALUES ('','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($lastname)."','".mysql_real_escape_string($department)."','".mysql_real_escape_string($gender)."','".mysql_real_escape_string($collegename)."','".mysql_real_escape_string($collegeplace)."','".mysql_real_escape_string($events)."')";
					if ($query_run = mysql_query($sql))
					{
						echo "sucessfully registered";
					}
					else
					{
						echo "failed.try again later";
					}	

		}
		else
		{
			echo "please fill in all the fillin all the fields";

		}
	
		
	}//*
?>
<form action="register.php" method="POST">
<table align="center" width="431" border="0" cellspacing="10" cellpadding="10" >
  <tr>
    <td width="126">First Name</td>
    <td width="25">:</td>
    <td width="180"><input name="first name" type="text" /></td>
  </tr>
  <tr>
    <td>Last Name</td>
    <td>:</td>
    <td><input name="last name" type="text" /></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td>:</td>
    <td>Male<input name="gender" type="radio" value="sex" /> Female<input name="gender" type="radio" value="sex" /></td>
  </tr>
  <tr>
    <td>Department</td>
    <td>:</td>
    <td><select name="DEPARTMENT">
                              <option value="CSE">CSE</option>
                              <option value="IT">IT</option>
                            </select></td>
  </tr>
  <tr>
    <td>Year</td>
    <td>:</td>
    <td><select name="year">
                              <option value="2nd">2nd</option>
                              <option value="3rd">3rd</option>
                              <option value="3rd">4th</option>
                            </select></td>
  </tr>
  <tr>
    <td>College Name</td>
    <td>:</td>
    <td><input name="college name" type="text" /></td>
  </tr>
  <tr>
    <td>College Place</td>
    <td>:</td>
    <td><input name="college place" type="text" /></td>
  </tr>
  <tr>
    <td>Workshop</td>
    <td>:</td>
    <td><input type="checkbox" name="name">
                            WORKSHOP</td>
  </tr>
  <tr>
                          <td>EVENTS</td>
                          <td>:</td>
                          <td><input type="checkbox " name="events"value="PAPERPRESENTATION" onClick="keepcount();">
                            PAPER PRESENTATION<br>
                            <input type="checkbox" name="events" value="MULTIMEDIA" value="yes" onClick="return keepcount();">
                            MULTIMEDIA<br>
                            <input type="checkbox" name="events" value="PHOTOGROPHY" onClick="return keepcount();">
                            PHOTOGRAPHY<br>
                            <input type="checkbox" name="events" value="TECHNICALQUIZE" onClick="return keepcount();" >
                            TECHNICAL QUIZ<br>
                            <input type="checkbox" name="events" value="CODEWAR" onClick="return keepcount();">
                            CODE WAR<br>
                            <input type="checkbox" name="events" value="DOODLE"  onClick="return keepcount();">
                            DOODLE<br>
              </td>
            </tr>
</table>

<label>
<label></label>
</label>
                    <table align="center" width="0" border="0" cellspacing="5" cellpadding="5">
                      <tr>
                        <td width="93"><label>
                          <input type="submit" name="summit" id="summit" value="Submit">
                        </label></td>
<td width="112"><label>
                          <input type="Reset" name="Reset" id="Reset" value="Reset">
                        </label></td>
                      </tr>
  </table>
 </form>
