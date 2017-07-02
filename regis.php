<?php
session_start();
?>

<!DOCTYPE html PUBLIC "JOB PROFILE REGISTRATION">
<html>
<head>

<title>Job Profile Registration Portal</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script>
function validateForm()
{
var a=document.reg.name.value;
var c=document.reg.qual.value;
var d=document.reg.gender.value;
var e=document.reg.phno.value;
var f=document.reg.email.value;
var g=document.reg.dob.value;
var h=document.reg.resume.value;

if (a=="")
  {
  alert("Name must be filled out");
  document.myForm.Name.focus() ;
           
  return false;
  }
if (d=="")
  {
  alert("Gender must be selected");
  document.reg.gender.focus() ;
           
  return false;
  }
if (c=="")
  {
  alert("Qualification must be Checked");
  document.reg.qual.focus() ;
           
  return false;
  }
if (e=="")
  {
  alert("Contact Number must be filled out");
  document.reg.phno.focus() ;
           
  return false;
  }
if (f=="")
  {
  alert("Email must be filled out");
  document.reg.email.focus() ;
           
  return false;
  }
if (h=="")
  {
  alert("Resume must be uploaded");
  document.reg.resume.focus() ;
           
  return false;
  }
if (g=="")
  {
  alert("Date of birth must be filled out");
  document.reg.dob.focus() ;
           
  return false;
  }
  
   return( true );
}
</script>

<?php

if(isset($_POST['submit']))
{
  if (isset($_POST['name']))
     {
	       $_POST['name']=$name;
     }
  else
     {
	        echo'<script>';
	        echo'alert("the name value is not set")';
	        echo'<script>';
      }

	if (isset($_POST['age']))
		{
			$_POST['age']=$age;
		}
	else
		{
			echo'<script>';
			echo'alert("the age value is not set")';
			echo'<script>';
		}

	if (isset($_POST['qual']))
		{
			$_POST['qual']=$quali;
		}
	else
		{
			echo'<script>';
			echo'alert("the qual value is not set")';
			echo'<script>';
		}

	if (isset($_POST['gender']))
		{
			$_POST['gender']=$gender;
		}
	else
		{
			echo'<script>';
			echo'alert("the gender value is not set")';
			echo'<script>';
		}	

	if (isset($_POST['phno']))
		{
			$_POST['phno']=$contact;
		}
	else
		{
			echo'<script>';
			echo'alert("the phno value is not set")';
			echo'<script>';
		}

	if (isset($_POST['dob']))
		{
			$_POST['dob']=$dob;
		}
	else
		{
			echo'<script>';
			echo'alert("the dob value is not set")';
			echo'<script>';
		}

	if (isset($_POST['email']))
		{
			$_POST['email']=$email;
		}	
	else
		{
			echo'<script>';
			echo'alert("the email value is not set")';
			echo'<script>';
		}
	
	if (isset($_POST['add']))
		{
			$_POST['add']=$add;
		}
	else
		{
			echo'<script>';
			echo'alert("the add value is not set")';
			echo'<script>';
		}
}

?>

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
  border-left:16px solid #3498db;
  border-right:16px solid #3498db;
  border-bottom:16px solid #000;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
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
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
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
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            

 <!--  NAVBAR HEADER START  -->
            
            <div class="navbar-header">
                <a class="navbar-brand" href="alogin.php">          Job Profile</a>
            </div>
            
            <!--  NAVBAR HEADER END  -->
            
            
            <ul class="nav navbar-nav navbar-right">
						
			    <li class="dropdown">
	        		
             
      <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"> <img src="1.png"></a>             
	        		<ul class="dropdown-menu">
				<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="signout.php"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>    
                    </ul>
        </nav>
                </div>
           </nav></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <div class="login-logo">
    <center><a href="index.html"><img src="images/logo1.png" width="269" height="204"/></a></center>
 
  <h2 class="form-heading">Fill the Registration Form</h2>
   <div class="app-cam1">
	  <form name="reg" onsubmit="return (validateForm());" method="post" action="show.php">
		
        <table cellpadding="10" cellspacing="10" width="50%" align="center">
  <tbody>
  <tr>
        <td>
        
        <input type="text" id="name2" name= "name" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
        </td>
        
        <td>
		<input type="text" name="age" id="age2" value="Age" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Age';}">
        </td>
        </tr>
        
        
        <tr><td>
        <label name= 'Qualification'>Select Your Qualification</label></td></tr>
        
        <tr>
        <td>
        <input type="checkbox" name="qual[]" id="qual2[]" value="B.Pharma." >
        
B.Pharma
        <input type="checkbox" name="qual[]" id="qual2[]" value="B.Tech.">

B.Tech.        
</td>

<td>
        <input type="checkbox" name="qual[]" id="qual2[]" value="M.Pharma." >
        
M.Pharma
        <input type="checkbox" name="qual[]" id="qual2[]" value="M.Tech.">

M.Tech.        
</td>
        </tr>
       
        <tr>
        <td>
        <input type="checkbox" name="qual[]" id="qual2[]" value="BBA">
        
BBA

 <input type="checkbox" name="qual[]" id="qual2[]" value="B.Com.">
        
B.Com.

 <input type="checkbox" name="qual[]" id="qual2[]" value="BCA">
        
BCA
</td>
        <td>
        <input type="checkbox" name="qual[]" id="qual2[]" value="M.Com.">
        
M.Com.

  <input type="checkbox" name="qual[]" id="qual2[]" value="MCA">
        
MCA

<input type="checkbox" name="qual[]" id="qual2[]" value="MBA">
        
MBA
</td>

</tr>
        <tr><td><br>
        <label name= 'Gender'>Choose Your Gender</label>
        </td></tr>
        <tr><td>
        <input type="radio" name="gender" id="gender2" value="Male">   Male
        </td><td>
        <input type="radio" name="gender" id="gender2" value="Female">  Female
        </td></tr>
        
        
        
        
        <tr>
        <td>
        
        <input type="text" name="phno" id="phno2" value="+91-0000000000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '+91-0000000000';}">
        </td><td>
        
        
        <input type="date" name="dob" id="dob2" value="Date Of Birth" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date of Birth';}">
        
        </td>
        </tr>
         
       <tr>
       <td>
     
      <input type="email" name="email" id="email2" value="abc@xyz.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'abc@xyz.com';}">
     </td>
     </tr>      
      </tbody></table>
       
        <input type="file" name="resume" id="resume2" placeholder="Upload the File in .doc format" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Upload the File';}">
         <textarea name="add" id="add2" placeholder="Address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"> </textarea>
   
  
            
		<div class="submit"><input type="submit"  id="register2" name="submit" value="Register"></div>

    </form>
  </div>
  </div>
  </div>
</body>
</html>