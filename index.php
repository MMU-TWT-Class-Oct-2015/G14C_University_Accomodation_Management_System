<?php
session_start();
?>
<html>
<head>
<title>School Web Project</title>
    <style type="text/css" media="screen">

.image {
	background:url(TM.jpg);
	background-size: 1050px 115px;
    background-repeat: no-repeat;
	
	}
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}

#horizontalmenu li
{
float:left;
 position:relative;
padding-right:50;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
}
#horizontalmenu li ul
 {
display:none;
position:relative;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<body>
<table width="1050px" align="center">
  <tbody class="bg">
    <tr class="image">
      <th height="115" colspan="2" >
    </tr>
	<tr>
      <td height="38" colspan="2" style="background-color:black">
      	<div id="horizontalmenu">
        <ul>
		<li><a href="index.php" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;" ><b>HOME</b></a></li>
        <li><a href="index.php?option=about" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>ABOUT</b></a></li>
		<li><a href="#" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#FFFFFF'" style="color:white; text-decoration:none;"><b>HOSTEL</b></a>
        	<ul style="width:100%">
				 <li style="width:100%"><a href="index.php?option=login" target="_blank" onMouseOut="this.style.color='#FFFFFF'" onMouseOver="this.style.color='blue'" style="color:white; text-decoration:none;">Administration Login</a></li>
			 </ul>
              </li>
		 </ul>
                 
            </li>
            
        </ul>
</div>
        
      </td>
    </tr>
    <tr>
      <th height="317" colspan="2">
      <!--Slider-->
      <script>
// This simple function returns object reference for elements by ID

// Variables for bubble array, bubble index, and the setInterval() variable
var ba, bi=0, intrvl;
// bca - Bubble Content Array. Put your content here.
var bca = [
    '<img src="aa.jpg" width=100%><h5>University campus</h5>',
	'<img src="b.jpg" width=100%><h5>University  Library</h5>',
	'<img src="cc.jpg" width=100%><h5>Hostel view</h5>',
	
	
];
// This function is triggered by the bubbleSlide() function below
function bubbles(bi){
	// Fade-out the content
	document.getElementById("bubblecontent").style.opacity = 0;
	// Loop over the bubbles and change all of their background color
	for(var i=0; i < ba.length; i++){
		ba[i].style.background = "silver";
	}
	// Change the target bubble background to be darker than the rest
	ba[bi].style.background = "black";
	// Stall the bubble and content changing for just 300ms
	setTimeout(function(){
		// Change the content
		document.getElementById("bubblecontent").innerHTML = bca[bi];
		//fade in the content
		document.getElementById("bubblecontent").style.opacity = 1;
		
		}, 300);
}
// This function is set to run every 3 seconds(3000ms)
function bubbleSlide(){
	bi++; // Increment the bubble index number
	// If bubble index number is equal to the amount of total bubbles
	if(bi == ba.length){
		bi = 0; // Reset the bubble index to 0 so it loops back at the beginning
	}
	// Make the bubbles() function above run
	bubbles(bi);
}
// Start the application up when document is ready
window.addEventListener("load", function(){
	// Get the bubbles array
	ba = document.getElementById("bubbles").children;
	// Set the interval timing for the slideshow speed
	intrvl = setInterval(bubbleSlide, 3000);
});
</script>
<style>
#bubblebox{ 
width:100%; 
height:550px; 

}
#bubbles{ 
width:auto; 
margin:auto; 
text-align:center; 
}
#bubbles > div{ 
display:inline-block; 
width:10px; height:10px; 
margin:24px 10px 0px 10px;  
text-align:center; 
border:1px solid black;
border-radius:100%; 
transition: background 1s linear 0s; 
cursor:pointer; 
}
#bubblecontent{ 
 
transition:opacity 1s linear 0s; 

}
#bubblecontent > h5{ 
text-align:center; 

color:#7EA800; 
}
#bubblecontent > img{
position:relative;
right:0px;
left:0px;

height:450px;
}

</style>

<div id="bubblebox">
  <div id="bubbles">
    <div onclick="bubbles(0); clearInterval(intrvl)"; style="background:silver;"></div>
    <div onclick="bubbles(1); clearInterval(intrvl);"></div>
    <div onclick="bubbles(2); clearInterval(intrvl);"></div>
   
	
  </div>
  <div id="bubblecontent">
    <h5></h5>
    <img>
  </div>
</div>
    <!--slider end-->
    
      </th>
    </tr>
    <tr>
      <td width="100%" height="647" bgcolor="black" colspan="2">
	<center>
	  <h2><b><font size="+1" color="white">Melaka University
	    </font></b></h2>
	</center>
    <center><img src="muuu.jpg" width="100%" height="388"></center>
    <p><center>
   
      <p><strong><font size="3px" color="white">Melaka University<font></strong> <b>-</b> <font size="2px" color="white">
	  a pioneer educational Institute of Malaysia, has been striving to provide quality higher education since 1999. Approved by International Educational Organizations, Melaka has a sprawling multi-discipline campus, world class facilities and competent faculty. Creating a benchmark in the field of education, Melaka aims to create proficient technocrats and future leaders with emphasis on overall development of personality imbibing core human values among students.','Our College  is dedicated to preparing students with the knowledge, skills and training needed for meaningful employment. Through education, we create opportunities, change lives and impact futures.</font></p>
    </center></p>
	<?php
		
	@$opt = $_GET['option'];
	if($opt=="")
	{
		error_reporting(1);
		?>
      
      </td>
	  </tr>
	
	<tr>
      <td width="100%" style="background-color:white;" height="50">
      <center><font size="+1"><b style="color:red;"><div >Updates</div><br></b></font></center>
      	<marquee direction="left" onMouseOver="stop()" onMouseOut="start()">
			
           <a href="index.php?option=news" style="text-decoration:none;color:red;"><font size="3"><b>News &nbsp;&nbsp;&nbsp;</b></font></a>
           <a href="index.php?option=notice" style="text-decoration:none;color:red;"><font size="3"><b>Notice Board &nbsp;&nbsp;&nbsp;</b></font></a>
        </marquee>
      </td>
    </tr>
    <tr>
      <td height="25" colspan="2" style="background-color:#B8Addd"><center><b>&copy;copyright by Melaka.com</b></center>
     </td>
    </tr>
  </tbody>
</table>
<?php
	}
	else{
	switch($opt)
	{
		case 'login':
		echo "<script>document.location='admin.php'</script>";
		break;
		case 'news':
		include('news.php');
		break;
                case 'about':
		echo "<script>document.location='about.php'</script>";
                break;
		case 'notice':
		include('notice.php');
		break;
		
	}
	}

	?>
</body>
</html>