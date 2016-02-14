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

<?php
$query = "Select * from student";
$result = mysql_query($query) or die(mysql_error());
?>

<br>
<table width="1050px" align="center" border="0">
<tr>
<th >Student ID</th>
<th >First Name</th>
<th >Last Name</th>
<th >Date Of Birth</th>
<th >Category</th>
<th >Course ID</th>
<th >Address</th>
</tr>

<?php
while ($row = mysql_fetch_row($result))
{
?>
<<<<<<< HEAD

             <table>
             <tr><td class="bold">Student ID:</td><td><?php echo $row[0] ?></td></tr>
             <tr><td class="bold">First Name:</td><td><?php echo $row[1] ?></td></tr>
             <tr><td class="bold">Last Name:</td><td><?php echo $row[2] ?></td></tr>
			 <tr><td class="bold">Date Of Birth:</td><td><?php echo $row[3] ?></td></tr>
              <tr><td class="bold">Category:</td><td><?php echo $row[4] ?></td><td>
             <tr><td class="bold">Course ID:</td><td><?php echo $row[5] ?></td></tr>
			 <tr><td class="bold">Address:</td><td><?php echo $row[6] ?></td></tr>
		 </table><hr>
<?php
=======
             <tr align="center">        
             <td><?php echo $row[0] ?></td>
             <td><?php echo $row[1] ?></td>
             <td><?php echo $row[2] ?></td>
			 <td><?php echo $row[4] ?></td>
             <td><?php echo $row[5] ?></td>
             <td><?php echo $row[6] ?></td>
			 <td><?php echo $row[3] ?></td>
			 </tr>
			 
<?php  
>>>>>>> 8f4fe1577f239888f8f4ed070be3234a8027bad1
}
?>

</table>
</body>
</html>
