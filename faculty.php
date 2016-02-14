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
		<li><a href="#" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>HOSTEL</b></a></li>
		<li><a href="admin.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>Administration Login</b></a></li>	 
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

  <a href="faculty.php">Faculties of MMU</a>
</div>

<div id="section">
<h1 style="text-align:center;">Faculties in MMU</h1>
<p> </p>
<ol>
       <li>Faculty of Business (FOB)</li>
       <ul>
         <li>Accounting (ACC)</li>
         <li>Business Administration (BA)</li>
         <li>Foundation in Business (FIB</li>
       </ul>
       <br>
       <li>Faculty of Law (FOL)</li>
       <ul>
         <li>International Law (IL)</li>
         <li>Foundation in Law (FIL)</li>
       </ul>
       <br>
       <li>Faculties of Information Technology (FIST)</li>
       <ul>
    	 <li>Data Communication and Networking (DCN)</li>
    	 <li>Information Technlogy Management (ITM)</li>
    	 <li>Security Technology (ST)</li>
    	 <li>Bioinformatics (BI)</li>
       <li>Foundation in Information Technology (FIT)</li>
       </ul>
       <br>
       <li>Faculty of Engineering (FOE)</li>
       <ul>
         <li>Telecommunications (TCM)</li>
         <li>Mechnical Engineering (ME)</li>
         <li>Robotics and Automation (RA)</li>
         <li>Foundation in Engineering (FE)</li>
       </ul>
     </ol>



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