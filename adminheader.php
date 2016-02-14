<?php
if ($_SESSION['login'] != true)
{
	header ("Location: admin.php");
}
?>
<td height="38" colspan="2" style="background-color:black">
      	<div id="horizontalmenu">
        <ul>
		<li><a href="adminregistration.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;" ><b>Registration</b></a></li>
        <li><a href="adminroombooking.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>Room Booking</b></a></li>
		<li><a href="admincheckstatus.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>Check Status</b></a></li>
		<li><a href="adminviewapplications.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>View Applicants</b></a></li>
		<li><a href="logout.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>LOGOUT</b></a></li>
		</ul>  
		</div>
</td>
