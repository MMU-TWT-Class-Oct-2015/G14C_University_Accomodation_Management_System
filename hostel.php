<?php
session_start();
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
    <td height="38" colspan="2" style="background-color:black">
      	<div id="horizontalmenu">
        <ul>
		<li><a href="index.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;" ><b>HOME</b></a></li>
        <li><a href="about.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>ABOUT</b></a></li>
		<li><a href="admin.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>ADMINISTRATIVE LOGIN</b></a></li>
		</ul>
		</div>
    </td>
    </tr>
	<tr>
	<td>

	<div id="header">
<h1>About Us</h1>
</div>

	<div id="nav">
  <a href="about.php">Chancellor of MMU</a>&nbsp&nbsp&nbsp

  <a href="facilities.php">Facilities of MMU</a>&nbsp&nbsp&nbsp

  <a href="faculty.php">Faculties of MMU</a>&nbsp&nbsp&nbsp

  <a href="hostel.php">Hostel of MMU</a>
</div>

<div id="section">
<h1 style="text-align:center;">Hostel of MMU</h1>

<p align="center" style="text-align: center;"><strong> <img src="images/singleroom.jpg" /></strong></p>
<p style="text-align: justify;">The hostel in MMU are all single rooms. There are around a total of 9 rooms in each hall. </p>
<p style="text-align: justify;">To book a room in the hostel, please go to the student affairs department and allow the staff to aid you in the booking process. </p>
<p style="text-align: justify;">Every room is a single room and the prices vary (weekly basis rental) based on the halls starting from RM50/week.</p>
</div>
<div id="footer"><b>
&copy;copyright by Melaka.com</b>
</div>
	</td>
	</tr>






  </tbody>
</table>

</body>
</html>
