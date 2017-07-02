<?php
session_start();

?>

<!DOCTYPE html PUBLIC "JOB PROFILE REGISTRATION">
<html>
<head>
<title>Job Profile Registration Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- loading Symbol Start -->

<style>
/* Center the loader */


#loader {
	position: absolute;
	left: 50%;
	top: 50%;
	z-index: 1;
	width: 150px;
	height: 150px;
	margin: -75px 0 0 -75px;
	border: 16px solid #f3f3f3;
	border-radius: 50%;
	border-top: 16px solid #000;
	border-left: 16px solid #3498db;
	border-right: 16px solid #3498db;
	border-bottom: 16px solid #000;
	width: 120px;
	height: 120px;
	-webkit-animation: spin 2s linear infinite;
	animation: spin 2s linear infinite;
}
 @-webkit-keyframes spin {
 0% {
-webkit-transform: rotate(0deg);
}
 100% {
-webkit-transform: rotate(360deg);
}
}
 @keyframes spin {
 0% {
transform: rotate(0deg);
}
 100% {
transform: rotate(360deg);
}
}
/* Add animation to "page content" */
.animate-bottom {
	position: relative;
	-webkit-animation-name: animatebottom;
	-webkit-animation-duration: 1s;
	animation-name: animatebottom;
	animation-duration: 1s
}
 @-webkit-keyframes animatebottom {
 from {
bottom:-100px;
opacity:0
}
to {
	bottom: 0px;
	opacity: 1
}
}
 @keyframes animatebottom {
 from {
bottom:-100px;
opacity:0
}
to {
	bottom: 0;
	opacity: 1
}
}
#myDiv {
	display: none;
	text-align: center;
}
</style>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

<!-- loading Symbol END -->

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!--- webfonts--->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>

<body onload="myFunction()" style="margin:0;" id="login">
<div id="loader"></div>
<div id="wrapper"> 
  <div align="justify">
    <!-- Navigation -->
  </div>
  <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0"> 
    
    <div align="justify">
      
      <!--  NAVBAR HEADER START  -->
      
    </div>
    <div class="navbar-header"> 
      <div align="justify"><a class="navbar-brand" href="alogin.php"> Job Profile</a> </div>
    </div>
    
    <div align="justify">
      <!--  NAVBAR HEADER END  -->
      
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"> <img src="1.png"></a>
          <ul class="dropdown-menu">
            <li class="dropdown-menu-header text-center"> <strong>Settings</strong> </li>
            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li class="m_2"><a href="signout.php"><i class="fa fa-lock"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
      </ul>
    </div>
  </nav>
</div>
<div align="justify">
  </nav>
  </div>
</div>
<div style="display:none;" id="myDiv" class="animate-bottom">
  <div class="login-logo">
    <div align="justify"><a href="index.html"><img src="images/logo1.png" width="269" height="204"/></a>
    </div>
    <h2 align="justify" class="form-heading">Your Registration Form  number is <?php echo(rand(10,100));?> </h2>
    <div align="justify"><br>
      <br>
      <?php
echo' <table cellpadding="10" cellspacing="10" width="50%" align="center">
  <tbody>';
if (isset($_POST['name']))
		{
$name=$_POST['name'];
echo '<tr><td>Your name is ' .$name;
		}
if (isset($_POST['age']))
		{
$age=$_POST['age'];
echo '</td><td>You are ' .$age.' years old</td></tr>';
		}
if (isset($_POST['gender']))
		{
$gender=$_POST['gender'];
echo '<tr><td><br>You are ' .$gender;
		}
if (isset($_POST['qual']))
		{
foreach($_POST['qual'] as $selected)
			{
echo  '</td><td><br>Your qualification is ' .$selected;
            }
		}
if (isset($_POST['dob']))
		{
$dob=$_POST['dob'];
echo  '</td></tr><tr><td><br>Your birth Date of Birth is ' .$dob;

		}
if (isset($_POST['phno']))
		{
$contact=$_POST['phno'];
echo  '</td><td><br>Your Contact Number is ' .$contact;
		}
if (isset($_POST['email']))
		{
$email=$_POST['email'];
echo  '</td></tr><tr><td><br>Your Email Id is ' .$email;
		}
if (isset($_POST['add']))
		{
$add=$_POST['add'];
echo  '</td><td><br>Your Address is ' .$add.'</td></tr></tbody></table>';
		}

?>
    </div>
  </div>
</div>
</body>
</html>