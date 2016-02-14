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
      <th height="115" colspan="2" >
    </tr>
	<tr>
    <?php include 'adminheader.php'; ?>
    </tr>

</tbody>
</table>

<?php 
$query = "Select * from student";
$result = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_row($result))
{
?>
             
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
}
?>

</body>
</html>