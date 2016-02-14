<?php
include 'database.php';

if (isset($_POST['bookroom'])){
	
	$lnumber = $_POST['lnumber'];
	$sdate = $_POST['sdate'];
	$edate = $_POST['edate'];
	$status = $_POST['status'];
	$sid = $_POST['sid'];
	$pnum = $_POST['pnum'];
	$stid = $_POST['stid'];

 $query = "INSERT INTO lease VALUES ('$lnumber','$sdate', '$edate', '$status', '$sid', '$pnum', '$stid')";
         mysql_query($query) or die(mysql_error());

	
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
<form name="booking" method="POST" action="">
<table width="400px" align="center" border="0">
                  <tr><td class="bold">Least num</td><td><input type=text name=lnumber></td></tr>
                  <tr><td class="bold">Start Date</td><td><input type=date name=sdate></td></tr>
                  <tr><td class="bold">End Date</td><td><input type=date name=edate></td></tr>
                  <tr valign=top><td class="bold">Current Status</td>
				  <td><select name=status>
                  <option value="wait">Waiting</option>
                  <option value="rent">Rent</option>
                 </select>
                  </td></tr>
				  <tr><td class="bold">Student ID</td><td><input type=text name=sid></td></tr>
				  <tr><td class="bold">Place number</td><td><input type=text name=pnum></td></tr>
				  <tr><td class="bold">Staff ID</td><td><input type=text name=stid></td></tr>
                  <tr><td></td><td><input name="bookroom"  type=submit value="Submit booking">&nbsp;&nbsp;<input type=reset value=Clear></td></tr>
                  </table>
</form>

</body>
</html>