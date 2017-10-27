<?php  include("bs_files.php"); ?>



<?php 

if (isset($_GET['msg'])) {
	if($_GET['msg'] == 'accountcreated'){
	$account_created = true; }
}

if (isset($_GET['error'])) {
	if ($_GET['error'] == 'invalidusernameorpassword') {
	
		$invalid = true;
	}
}


?>



<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="w3.css files/w3.css">
	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
	<style type="text/css">
	 body{ background-image: url("new5.jpg");
		  background-size: cover;
		  background-repeat: no-repeat;
		}
		 
		 #login-form .form-control{border-radius: 15px;}
		 
		 #login-form .btn{background-color: yellow; border-radius: 0px; font-size: 18px; font-weight: bold; border: 2px solid transparent}
		 #login-form .btn:hover{background-color: transparent; border: 2px solid yellow; color: yellow; }
		 #login-form .form-control {font-size: 18px; color: black;}

		
		 #login-form h4{color: yellow; }
		 #login-form form{border: 5px solid yellow;   padding: 30px; margin-top: 80px;}

		 #login-form .fa{font-size: 24px;}
		 #login-form  a{color: yellow; font-size: 15px; }
	</style>
	<title> Login | Panel </title>
</head>
<body>

<div class="container w3-animate-zoom">
	
<div id="login-form">
<form class="col-md-offset-4 col-md-5 col-md-offset-3" action="verify-login.php" method="post">


	
	<div id"header" style="background: yellow; color:black; padding:1px; letter-spacing:2px;;">
		<h3> <center> <i class="fa fa-user-circle" aria-hidden="true"></i> Login Panel </center></h3>
	</div>

<br>
	<?php 
             	if (isset($account_created)) {

			     echo "<p class='alert alert-success '>
				  <b> Account Created Successfully ! </b> 
				  <a href='#' style='color:black; font-size:22px;'  class='close' data-dismiss='alert' >  &times; </a>  </p> ";
		    } 

		    if (isset($invalid)) {

			     echo "<p class='alert alert-danger  '>
				  <b>Invalid username or password </b> 
				  <a href='#' style='color:black; font-size:22px;'  class='close' data-dismiss='alert' >  &times; </a>  </p> ";
		    }  


?>




		<h4> <i class="fa fa-user" aria-hidden="true"></i> &nbsp; Enter Name</h4>
		<input class="form-control" name="name" type="text" required >
	
		<h4> <i class="fa fa-lock" aria-hidden="true"></i> &nbsp; Enter Password</h4>
		<input class="form-control" name="password" type="password" required >
		<a href="../signup/index.php">Create An Account ?</a> <br> <br>
		<button class="btn  btn-block" name="login_btn" > <i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp;Login Now</button>

<form>	  

	  <br>
	
</div>
</div>
<br><br><br><br>
</body>
</html>