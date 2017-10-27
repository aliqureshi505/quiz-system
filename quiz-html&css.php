<?php
include("bs_files.php"); ?>

<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="w3.css files/w3.css">


	<title></title>

	<style type="text/css">

	.badge{padding: 15px; background-color: orange; }

	</style>
</head>
<body>

<div class="container">

	<nav class="navbar   w3-animate-zoom ">
  <div class="container-fluid">
    <div class="navbar-header ">


    		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
      		  </button>



      <a class="navbar-brand" href="#">Online-Quizzer</a>
    </div>

     <div class="collapse navbar-collapse" id="myNavbar">

    <ul class="nav navbar-nav navbar-right">
      <li > <a  href="#" id="nav_items"> <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>  </li>
      <li class="dropdown">
        <a id="nav_items" class="dropdown-toggle" data-toggle="dropdown" href="#">Start Quiz
        <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <ul class="dropdown-menu" >
          <li><a href="#">HTML & CSS</a></li>
          <li><a href="#">PHP-OOPS</a></li>
          <li><a href="#">Code-Igniter</a></li>
          <li><a href="#">PHP & MYSQL</a></li>
          
        </ul>

      </li>








      <li><a href="#footer" id="nav_items"> <i class="fa fa-info" aria-hidden="true"></i> &nbsp; About Us</a></li>
      <li><a href="#footer" id="nav_items"> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; Contact Us</a></li>


      <li>  
      	<?php  if (isset($_SESSION['logged_in'])) {
      				$name = $_SESSION['user_name'];
      				echo " <a href='logout.php' class='btn' id='login_btn' >  <i class='fa fa-power-off' aria-hidden='true'></i> Logout Me  </a> "; 
					}

				else{
					echo " <a href='' class='btn' id='login_btn' data-toggle='modal' data-target='#login'> Login|Signup  </a> ";
				}	   

      	?>	
      
<!--       	<a href="" class="btn" id="login_btn" data-toggle="modal" data-target="#login"  >Login|Signup</a> 
 -->
      </li>

    </ul>
  </div>


 
</div>
</nav>

<hr>



<div class="badge badge-lg"> HTML & CSS </div> <br><br>

</body>
</html>

