<?php
include 'database.php';

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
<form name="check" method="POST" action="">
<table width="400px" align="center" border="0">
         <tr><td class=\"bold\">Lease Number:</td><td><input type=text name=lnumber> eg : L*****</td></tr>
         <tr><td></td><td><input name="submitCheck" type=submit value="Submit!">&nbsp;&nbsp;<input type=reset value=Clear></td></tr>
</table>

<?php

if (isset($_POST['submitCheck'])) {

	$lnumber = $_POST['lnumber'];

$query = "select * from lease where lease_number ='$lnumber'";
$result = mysql_query($query) or die(mysql_error());

 while ($row = mysql_fetch_row($result)){

             echo "<br><table width=\"400px\" align=\"center\" border=\"0\">
			 <tr><td colspan=\"3\"><h2>Reservation Status Checking</h2></td></tr>
             <tr><td class=\"bold\">Lease Number:</td><td>$row[0]<input type=hidden name=update4 value=$row[0]></td></tr>
             <tr><td class=\"bold\">Student ID:</td><td>$row[4]</td></tr>
             <tr><td class=\"bold\">Place Number:</td><td>$row[5]</td></tr>
             <tr><td class=\"bold\">Start Date:</td><td>$row[1]</td></tr>
             <tr><td class=\"bold\">End Date:</td><td>$row[2]</td></tr>
             <tr><td class=\"bold\">Status:</td><td>$row[3]</td><td><input type=submit name=\"statusUpdate\" value=\"Update Status to Approve\"></td></tr>
             </table><hr width=\"1050px\">";
}
}
if (isset($_POST['statusUpdate'])) {
	extract($_POST);
 $query = "UPDATE `lease` SET `status` = 'Approve' WHERE lease_number ='$update4'";
 $result = mysql_query($query) or die(mysql_error());

 echo "<H1 align=\"center\" border=\"0\">Update Done !</h1>";
 }
?>
</form>
</body>
</html>
