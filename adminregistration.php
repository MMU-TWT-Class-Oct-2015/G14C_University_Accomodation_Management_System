<?php
include 'database.php';

if(isset($_POST['submitReg'])) {
	 $stuid = $_POST['sid'];
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $dob = $_POST['dob'];
	 $cat = $_POST['cat'];
	 $cid = $_POST['cid'];
	 $saddress = $_POST['saddress'];
	 
	 $query = "INSERT INTO student VALUES('$stuid', '$fname', '$lname', '$saddress', '$dob', '$cat', '$cid')";
	 mysql_query($query) or die(mysql_error());
	$message = "Register Sucessfullyully";
	echo "<script type='text/javascript'>alert('$message');</script>";
	 
	 
	 
}




?>
<html>
<head>
<title>School Web Project</title>
<style type="text/css" media="screen">
.image {
	background:url(images/TM.jpg);
	background-size: 1050px 115px;
    background-repeat: no-repeat;
	
	}
	</style>
    <link rel="stylesheet" type="text/css" href="style.css">	
</head>
<body>
<table width="1050px" align="center" border="0">
  <tbody class="bg">
    <tr class="image">
      <td height="115" colspan="2" >
    </tr>
	<tr>
    <?php include 'adminheader.php'; ?>
    </tr>
	
</tbody>
</table>
<br>
<form name="registerstu" method="POST" action="">
<table width="400px" align="center" border="0">
                  <tr><td class="bold">Student ID:</td><td><input type="text" name="sid"></td></tr>
                  <tr><td class="bold">First Name:</td><td><input type="text" name="fname"></td></tr>
                  <tr><td class="bold">Last Name:</td><td><input type="text" name="lname"></td></tr>
                  <tr><td class="bold">Date Of Birth:</td><td><input type="date" name="dob"></td></tr>
                  <tr><td class="bold">Category:</td><td>
                  <input type="radio" name="cat" value="F" checked> Foundation<br>
                  <input type="radio" name="cat" value="UG" > Undergraduate<br>
                  <input type="radio" name="cat" value="PG"> Postgraduate<br></td></tr>
                  <tr><td class="bold">Course ID:</td><td><input type="text" name="cid"></td></tr>
                  <tr><td class="bold" valign=top>Address:</td><td>
                  <textarea name="saddress" wrap="soft" cols="35" rows="10"></textarea>
                  </td>
				  </tr>
                  <tr><td></td><td><input name="submitReg" type="submit" value="Submit!">&nbsp;&nbsp;<input type="reset" value="Clear"></td></tr>
				  
</table>
</form>

</body>
</html>