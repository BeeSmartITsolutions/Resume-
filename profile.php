<!DOCTYPE html PUBLIC "JOB PROFILE REGISTRATION">
<html>
<head>

<title>Job Profile Registration Portal</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
</head>
<body>

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
	        		
                    <?php
						session_start();
$name=$_SESSION['A_name'];

	
echo '<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"> <img src="1.png"></a>'	;
					?>
             
                   
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
                <!-- /.sidebar-collapse -->
             </div>
            <!-- /.navbar-static-side -->
   </div>
    <!-- /#wrapper -->
        
        
        
        <div id="page-wrapper">
        <div class="graphs">
     	<div class="col_1">
		 
 
        <div class="clearfix"> </div>
 
    	</div>
        
        </div>
       </div>
      <!-- /#page-wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
