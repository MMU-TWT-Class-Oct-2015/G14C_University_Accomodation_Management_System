
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Main Page</title>
    <style type=text/css>
      .bold {font-weight: bold}
      .warn {color: red}
    </style>


    <?php

       $buttonReg = "<button name=\"button1\">Registration</button>";
       $buttonbook = "<button name=\"button2\">Book Room</button>";
       $viewLease = "<button name=\"button3\">Check Status</button>";
       $viewApplication= "<button name=\"button4\">View Applications</button>";
       $logout= "<button name=\"buttonlogout\">Logout</button>";
       $btnback="<button name=\"btnback\" onclick = \"'window.location.reload()'\" >Back</button>";
	   extract($_POST);


       $menu = $buttonReg.$buttonbook.$viewLease.$viewApplication.$logout;
       if (isset($_POST['button1'])){
         $body = '<h1>Student Registration</h1>
                  <table>
                  <tr><td class="bold">Student ID:</td><td><input type=text name=sid></td></tr>
                  <tr><td class="bold">First Name:</td><td><input type=text name=fname></td></tr>
                  <tr><td class="bold">Last Name:</td><td><input type=text name=lname></td></tr>
                  <tr><td class="bold">Date Of Birth:</td><td><input type=date name=dob></td></tr>
                  <tr><td class="bold">Category:</td><td>
                  <input type="radio" name="cat" value="F" checked> Foundation<br>
                  <input type="radio" name="cat" value="UG" > Undergraduate<br>
                  <input type="radio" name="cat" value="PG"> Postgraduate<br></td></tr>
                  <tr><td class="bold">Course ID:</td><td><input type=text name=cid></td></tr>
                  <tr><td class="bold" valign=top>Address:</td><td>
                  <textarea name=saddress wrap=soft cols=35 rows=10>
                  </textarea>
                  </td></tr>
                  <tr><td></td><td><input name="submitReg" type=submit value="Submit!">&nbsp;&nbsp;<input type=reset value=Clear></td></tr>
                  </table>
                  ';
       }
       else if (isset($_POST['button2'])){
         $body = '<h1>Accommodation Registration</h1>
                  <table>
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
                  ';
       }
       else if(isset($_POST['submitReg'])){

         if (!$connect = mysql_connect("localhost", "root", "")) {
           die(mysql_error());
         }
         if (mysql_select_db("TWT06", $connect)){
       $query = "INSERT INTO `student`(`student_id`, `fname`, `lname`, `address`, `dob`, `category`, `course_id`) VALUES ('$sid', '$fname', '$lname', '$saddress', '$dob', '$cat', '$cid');";
         mysql_query($query) or die(mysql_error());

         $body = "Registration Done!<br>";




       }
	   }
       else if (isset($_POST['button3'])){
         $body = "
         <h1>Reservation Status Checking</h1>
         <table>
         <tr><td class=\"bold\">Lease Number:</td><td><input type=text name=lnumber> eg : L*****</td></tr>
         <tr><td></td><td><input name=\"submitCheck\" type=submit value=\"Submit!\">&nbsp;&nbsp;<input type=reset value=Clear></td></tr>
         </table>";

       }
       else if (isset($_POST['submitCheck'])) {
         $lnumber = mysql_real_escape_string($_POST['lnumber']);
         if(empty($lnumber))
         {

           $body = "
           <h1>Reservation Status Checking</h1>
           <table>
           <tr><td class=\"bold\">Lease Number:</td><td><input type=text name=lnumber> eg : L*****</td></tr>
           <tr><td></td><td><input name=\"submitCheck\" type=submit value=\"Submit!\">&nbsp;&nbsp;<input type=reset value=Clear></td></tr>
           <tr><td></td><td><h3 class=\"warn\">Please enter a lease number</h3></td></tr>
           </table>
           ";
         }
         else {
           if (!$connect = mysql_connect("localhost", "root", "")) {
             die(mysql_error());
           }
           if (!mysql_select_db("TWT06", $connect))
            die(mysql_error());

           $query = "select * from lease where lease_number='" . $_POST['lnumber'] . "'";
           $result = mysql_query($query) or die(mysql_error());
$body="";
           while ($row = mysql_fetch_row($result)){
             $body = "
             <h1>Reservation Status Checking</h1>
             <table>
             <tr><td class=\"bold\">Lease Number:</td><td><input type=text name=lnumber> eg : L*****</td></tr>
             <tr><td></td><td><input name=\"submitCheck\" type=submit value=\"Submit!\">&nbsp;&nbsp;<input type=reset value=Clear></td></tr>
             </table>
             <br><table>
             <tr><td class=\"bold\">Lease Number:</td><td>$row[0]</td></tr>
             <tr><td class=\"bold\">Student ID:</td><td>$row[4]</td></tr>
             <tr><td class=\"bold\">Place Number:</td><td>$row[5]</td></tr>
             <tr><td class=\"bold\">Start Date:</td><td>$row[1]</td></tr>
             <tr><td class=\"bold\">End Date:</td><td>$row[2]</td></tr>
             <tr><td class=\"bold\">Status:</td><td>$row[3]</td><td><input name=\"statusUpdate\" type=submit value=\"Update\"></td></tr>
             <table><hr>";
         }
         }

     }
       else if (isset($_POST['bookroom'])){
		    if (!$connect = mysql_connect("localhost", "root", "")) {
           die(mysql_error());
         }
         if (mysql_select_db("TWT06", $connect)){
       $query = "INSERT INTO `lease`(lease_number,`start_date`, `end_date`, `status`, `student_id`, `place_number`, `staff_id`) VALUES ('$lnumber','$sdate', '$edate', '$status', '$sid', '$pnum', '$stid');";
         mysql_query($query) or die(mysql_error());

         $body = "Booking Done!<br>";
         
       }
	   }
       else if (isset($_POST['button4'])){
		   if (!$connect = mysql_connect("localhost", "root", "")) {
             die(mysql_error());
           }
           if (mysql_select_db("TWT06", $connect)){
           $query = "select * from student";
           $result = mysql_query($query) or die(mysql_error());
           $body="";
           while ($row = mysql_fetch_row($result)){
             $body =$body."
             <table>
             <tr><td class=\"bold\">Student ID:</td><td>$row[0]</td></tr>
             <tr><td class=\"bold\">First Name:</td><td>$row[1]</td></tr>
             <tr><td class=\"bold\">Last Name:</td><td>$row[2]</td></tr>
			 <tr><td class=\"bold\">Date Of Birth:</td><td>$row[3]</td></tr>
              <tr><td class=\"bold\">Category:</td><td>$row[4]</td><td>
             <tr><td class=\"bold\">Course ID:</td><td>$row[5]</td></tr>
			 <tr><td class=\"bold\">Address:</td><td>$row[6]</td></tr>
			 </table><hr>";
		   }
		   }
	   }
	   
        else if (isset ($_POST['buttonlogout'])) { 
  session_start();
   unset($_SESSION['admin']);
    header('location:index.php');


       }
     ?>
  </head>
  <body>
    <form ENCTYPE=multipart/form-data action="main.php" method="POST">
    <table>
      <tr>
        <td>
          <?php
            print($menu);
           ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php
            print($body);
           ?>
        </td>
      </tr>
    </table>
    </form>
  </body>
</html>