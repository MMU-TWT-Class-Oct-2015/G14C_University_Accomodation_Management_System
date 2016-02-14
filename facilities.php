<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
#header {
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;
}
#nav {
    line-height:80px;
    background-color:black;
    height:350px;
    width:150px;
    float:left;
    padding:5px;
    font-weight: bold;
    text-align: center;
}
#nav a{
	text-decoration: none;
}
#section {
    width:800px;
    float:left;
    padding:10px;
    background-color:	none;
}
#footer {
    background-color:#B8Addd;
    color:black;
    clear:both;
    text-align:center;
   padding:5px;
}
a {
  color:white;
}
a:hover{
  color:pink;
}
a:active{
  color:blue
}
</style>
</head>
<body>

<div id="header">
<h1>About Us</h1>
</div>

<div id="nav">
  <a href="about.php">Chancellor of MU</a>
<br>
  <a href="facilities.php">Facilities of MU</a>
<br>
  <a href="faculty.php">Faculties of MU</a>
  <br>
  <a href="index.php">Home</a>
</div>

<div id="section">
  <h1 style="text-align:center;">Facilities of MMU</h1>
  <p> </p>
  <p align="center" style="text-align: center;"><strong> <img   src="recreational.jpg" /></strong></p>

  <p style="text-align: center;font-size:160%"><strong>Horseback</strong></p>
  <p align="center" style="text-align: center;"><strong> <img   src="horseback.jpg" /></strong></p>
  <p style="text-align: center;">For more information about the Horseback Riding Club in UNITEN, please contact:</p>
  <p style="text-align: center;">EQUESTRIAN ASSOCIATION OF MALAYSIA (EAM)</p>
  <p style="text-align: center;">Contact: Maj (Rtd.) Yap Mou Soon, Executive Secretary</p>
  <p style="text-align: center;">No 20 Persiaran Ampang,</p>
  <p style="text-align: center;">55000 Kuala Lumpur </p>
  <p style="text-align: center;">Tel: 03-4251 1367</p>
  <p style="text-align: center;">  Fax: 03-4257 6848 </p>
  <p style="text-align: center;">Email to inquire:
  <a href="mailto:someone@example.com?Subject=Inquiry" target="_top" style="color:blue">Send Mail</a></p>

  <p style="text-align: center;font-size:160%"><strong>Gym</strong></p>
  <p align="center" style="text-align: center;"><strong> <img   src="Gym.jpg" /></strong></p>
  <p style="text-align: center;">The MMU Gymnasium is located in the ground floor of the Faculty of Law building.</p>
  <p style="text-align: center;">The fee is RM1.05 per entry for student and RM1.60 for staff (inclusive of 6% GST). </p>


  <p style="text-align: center;font-size:160%"><strong>Pool</strong></p>
  <p align="center" style="text-align: center;"><strong> <img   src="Pool.jpg" /></strong></p>
  <p style="text-align: center;">MMU has an Olympic-sized swimming pool which is a part of the Campus sports and recreational facilities.</p>
  <p style="text-align: center;">The pool is open for students, staff, teaching groups as well as the public, with different opening hours allocated for staff,</p>
  <p style="text-align: center;">students, women and family groups.</p>

</div>

<div id="footer"><b>
&copy;copyright by Melaka.com</b>
</div>

</body>
</html>
