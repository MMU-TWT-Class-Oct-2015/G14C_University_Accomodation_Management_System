<?php
session_start();
$con = mysql_connect("localhost","root","technology","login");

mysql_select_db("login",$con);
if(isset($_POST['admlogin']))
{
	$name = $_POST['admname'];
	$pass = $_POST['admpass'];
	$_SESSION['admin']=$name;
	$p = md5($pass);
	$q = "SELECT * FROM admin WHERE username='$name' AND password='$p'";
	$cq = mysql_query($q);
	$row = mysql_num_rows($cq);
	if($row == true)
	{
	echo "<script> alert('Hello Admin $name')</script>";
	}
	else
	{
	echo "<script>alert('Wrong Login Details, Try Again!')</script>";
	}
}
?>
<div align="center">
<form method="post">
<table width="1067" height="493" border="1">
  <tbody>
    <tr>
      <td width="1057" height="59" bgcolor="#4D4C94"><center>
        <h1><strong style="color: #FFFFFF">ADMINISTRATOR LOGIN</strong></h1>
      </center></td>
    </tr>
    <tr>
      <th height="426" bgcolor="#969BEF">
      <fieldset style="display:inline-flex"><legend><font size="+1">Login</font></legend>
	  <p>Username : <input type="text" name="admname" placeholder="Admin Username">
      <p>Password : <input type="password" name="admpass" placeholder="Admin Password">
      <p><input type="submit" value="Login" name="admlogin">&nbsp;<input type="reset" value="Reset"></p></fieldset>
      </th>
    </tr>
  </tbody>
</table>
</form>
</div>