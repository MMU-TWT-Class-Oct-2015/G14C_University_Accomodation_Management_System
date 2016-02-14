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
</form>
<?php

if (isset($_POST['submitCheck'])) {

	$lnumber = $_POST['lnumber'];

$query = "select * from lease where lease_number ='$lnumber'";
$result = mysql_query($query) or die(mysql_error());

 while ($row = mysql_fetch_row($result)){
<<<<<<< HEAD


             echo "<h1>Reservation Status Checking</h1>
						 <br><table>
						 <tr><td class=\"bold\">Lease Number:</td><td>$row[0]<input type=hidden name=update4 value=$row[0]></td></tr>
						 <tr><td class=\"bold\">Student ID:</td><td>$row[4]</td></tr>
						 <tr><td class=\"bold\">Place Number:</td><td>$row[5]</td></tr>
						 <tr><td class=\"bold\">Start Date:</td><td>$row[1]</td></tr>
						 <tr><td class=\"bold\">End Date:</td><td>$row[2]</td></tr>
						 <tr><td class=\"bold\">Status:</td><td>$row[3]</td><td><button name=\"statusUpdate\"  >Update Status to Approve</button></td></tr>
						 <table><hr>";
=======
?>			 
             
                         
             <br><table width="400px" align="center" border="0">
			 <tr><td colspan="3"><h2>Reservation Status Checking</h2></td></tr>
             <tr><td class="bold">Lease Number:</td><td><?php echo $row[0] ?></td></tr>
             <tr><td class="bold">Student ID:</td><td><?php echo $row[4] ?></td></tr>
             <tr><td class="bold">Place Number:</td><td><?php echo $row[5] ?></td></tr>
             <tr><td class="bold">Start Date:</td><td><?php echo $row[1] ?></td></tr>
             <tr><td class="bold">End Date:</td><td><?php echo $row[2] ?></td></tr>
             <tr><td class="bold">Status:</td><td><?php echo $row[3] ?></td><td><input name="statusUpdate" type=submit value="Update"></td></tr>
             </table><hr width="1050px">
<?php
>>>>>>> 8f4fe1577f239888f8f4ed070be3234a8027bad1
}
}
elseif (isset($_POST['statusUpdate'])) {
	if (!$connect = mysql_connect("localhost", "root", "")) {
		die(mysql_error());
	}
	if (!mysql_select_db("TWT06", $connect))
	 die(mysql_error());
 $query = "UPDATE `lease` SET `status` = 'Approve' WHERE lease_number ='$update4'";
 $result = mysql_query($query) or die(mysql_error());

 echo "Update Done!<br>";
}
?>

</body>
</html>
