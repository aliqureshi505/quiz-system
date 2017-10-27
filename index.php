<?php  include("bs_files.php");  session_start(); ?>




<html>
<head>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="w3.css files/w3.css">


	<title></title>

	<style type="text/css">
	.jumtotron{  
		       background-image: url("img2.jpg");
			   background-size: cover;
			   background-repeat: no-repeat;
			   background-attachment: fixed;
			   }

	nav{background: transparent; margin:1%; font-size: 14px; }	
	nav .icon-bar{ border: 2px solid white;}
	#nav_items {border-bottom: 2px solid transparent;}
	#nav_items:hover {background-color: transparent; border-bottom: 2px solid #FFEB3B;}


	.dropdown-menu {background-color: black; color:white; border: 2px solid white;}
	.dropdown-menu a{padding: 15px; margin-top: 5px; font-size: 16px;}
	.dropdown-menu a:hover{ background-color: transparent;}


	.navbar-right li a{color: white; }	
	.main h1{ color: orange; font-weight: bolder; letter-spacing: 2px; line-height: 50px;}  
	#para h3{font-weight: bold; color: white; line-height: 40px; padding-top: 20px; padding-bottom: 20px;}
	#get-started-btn  {background-color: teal; 
						border-radius:0px; 
					   border: 3px solid teal;
					   font-size: 20px; font-weight: bold;letter-spacing: 2px;

					    } 
	#get-started-btn:hover  {background-color: transparent; 
						border-radius:0px; 
					   border: 3px solid teal; 
					   	font-size: 20px; font-weight: bold; 

					    } 
	#sub-btn .btn {border-radius: 0px; font-size: 18px; margin-right: 7px; margin-top: 10px; background-color: transparent;} 
	#sub-btn  #btn-1{ border: 3px solid #CDDC39;} #sub-btn  #btn-1:hover{ background-color: #4CAF50; border: 3px solid transparent;}
	#sub-btn  #btn-2{ border: 3px solid #CDDC39;} #sub-btn  #btn-2:hover{ background-color: #4CAF50; border: 3px solid transparent;}
	#sub-btn  #btn-3{ border: 3px solid #CDDC39;} #sub-btn  #btn-3:hover{ background-color: #4CAF50; border: 3px solid transparent;}
	#sub-btn  #btn-4{ border: 3px solid #CDDC39;} #sub-btn  #btn-4:hover{ background-color: #4CAF50; border: 3px solid transparent;}

	
	.navbar-brand{color: #FFEB3B; letter-spacing: 2px; font-weight: bolder;}
	.navbar-brand:hover{color: #FFEB3B; text-decoration: none;}



	.circle{border-radius: 300px; text-align: center;  background-color: #00BCD4;  border: 3px solid #00BCD4;margin-right: 55px; margin-top: 20px;  display: inline-block; height: 200px;  width: 200px;}
	.circle h3{text-align: center; padding-top: 60px; color: white;}
/*	.circle:hover {cursor: pointer; background-color: transparent; color: black; border: 3px solid #9C27B0; }
	.circle:hover h3{color: black; text-decoration: none;}

	*/

	.circle:hover h3{ font-weight: bolder; color: black;  }
	.circle:hover{height: 192px; width: 192px;}

	

	

	#explore{background-color:transparent; color:#9C27B0; border-radius:0px; border:3px solid #9C27B0;}
	#explore:hover{ background-color: #9C27B0; color: white}



	#modal-input input, .btn{ border-radius: 0px;}	



	#start_jumbo{background-image: url("ex1.jpg");
				 background-size: cover;
				 background-repeat: no-repeat;
				 background-attachment: fixed;}
	#start_jumbo h2{color: white; font-weight: bolder;}	


	#login_btn{background-color: transparent; margin-left: 8px; border: 2px solid #FFEB3B; color: #FFEB3B;}
	#login_btn:hover{background-color: #FFEB3B; color: black;}

	#start_jumbo p{font-weight: bold; font-size: 24px; letter-spacing: 1px; color: #FFEB3B; margin-top: 40px; line-height: 40px;}	


	#loc{background-image: url("loc75.jpg");
		 background-size: cover;
		 background-repeat: no-repeat;
		background-attachment: fixed;}	 


	#loc h3{color: white; font-weight: bold;}	
	#dev-contact{color: white;}
	#dev-contact i{color: orange; font-size: 22px;}



	#follow-us .fa{ text-align: center; font-size: 32px; 
					border-radius: 50px; 
					margin-right: 30px; padding-top: 13px;
					display: inline-block; width: 70px; height: 70px;
					border: 3px solid black;
				}
	#follow-us a:hover{text-decoration: none;}
	#follow-us .fa-facebook:hover{color: #3B5998; border: 3px solid #3B5998}

	#follow-us .fa-twitter:hover{color: #1DA1F2; border: 3px solid #1DA1F2}

	#follow-us .fa-google-plus:hover{color: #DD4B3E; border: 3px solid #DD4B3E}
	#follow-us .fa-skype:hover{color: #55ACEE; border: 3px solid #55ACEE}

	#footer{background-color:#9C27B0; color: white; font-size: 18px;padding: 10px; margin: 10px; }

	.alert-success, .alert-danger{padding:10px; margin: 2px; color: black; font-weight: bolder; border-radius: 0px; }
	.close{opacity: 0.9;}
	.alert-danger{color: red;}

	.w3-hover-sepia:hover{cursor: pointer;}




	</style>
</head>
<body>



		<?php  

			if (isset($_GET['msg'] )) { 

			     echo " <center> 
			     			 <p class='alert alert-success w3-animate-top'> <i class='fa fa-check' aria-hidden='true'></i> &nbsp; Account Created Successfully ! 
			     			 	<a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a>
			     			 </p>

			     		</center>";
			    } 

			    if (isset($_GET['login'])) {
			       	 if(  $_GET['login'] === 'false' ){
			       	  echo " <center> 
			     			 <p class='alert alert-danger w3-animate-top'> <i class='fa fa-info-circle' aria-hidden='true'></i> &nbsp; Invalid Username or Password! 
			     			 	<a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a>
			     			 </p>

			     		     </center>";
			       } }

			     if (isset($_GET['message'])) {
			         	if ($_GET['message'] == 'lofinFirst' ) {

			         		echo " <center> 
			     			 <p class='alert alert-danger w3-animate-top'> <i class='fa fa-info-circle' aria-hidden='true'></i> &nbsp; Please Login First !
			     			 	<a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a>
			     			 </p>

			     		     </center>";
			         		
			         	}
			         }    
			       
		 ?>


	<div class="jumtotron">

<div class="container">

			<nav class="navbar  w3-animate-zoom ">
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
      <li > <a  href="index.php" id="nav_items"> <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>  </li>
      <li class="dropdown">
        <a id="nav_items" class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp;Start Quiz
        <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        <ul class="dropdown-menu" >
          <li><a href="startquiz.php">HTML & CSS</a></li>
          <li><a href="startquiz.php">PHP-OOPS</a></li>
          <li><a href="startquiz.php">Code-Igniter</a></li>
          <li><a href="startquiz.php">PHP & MYSQL</a></li>
          
        </ul>

      </li>








      <li><a href="#loc" id="nav_items"> <i class="fa fa-info" aria-hidden="true"></i> &nbsp; About Us</a></li>
      <li><a href="#loc" id="nav_items"> <i class="fa fa-phone" aria-hidden="true"></i> &nbsp; Contact Us</a></li>


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







	
<!--   LOGIN SIGNUP MODALS -->



<!-- Modal -->
<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Login First</h4>
      </div>
      <div class="modal-body">
        <table class="table table-responsive" id="modal-input">

        	<form action="login.php" method="post">

           <tr>     <th>Enter Name</th>       <td><input name="name"  type="text" placeholder="Enter name" class="form-control"></td>       </tr>
           <tr>     <th>Enter Password</th>       <td><input  name="password" type="password" placeholder="Enter password" class="form-control"></td>       </tr>
           <tr>     <th></th>           <td><button id="login-btn" name="login_btn" class="btn btn-success  btn-block">Login Me</button></td>       </tr>

           </form>

          <tr>      <th></th>  <td> <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#signup" >Create New Account</button>  </td> </tr>

          

        </table>
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>





   



<!-- Signup Modal -->
<div id="signup" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Create An Account:</h4>
      </div>
      <div class="modal-body">
        <table class="table table-responsive" id="modal-input">

        	<form action="signup.php" method="post">

           <tr>     <th>Enter Name</th>       <td><input name="name"  type="text" placeholder="Enter name" class="form-control"></td>       </tr>
           <tr>     <th>Enter Email</th>       <td><input  name="email" type="email" placeholder="Enter password" class="form-control"></td>       </tr>
            <tr>     <th>Enter Password</th>       <td><input  name="pass" type="password" placeholder="Enter password" class="form-control"></td>       </tr>
             <tr>     <th>Confirm Password</th>       <td><input  name="snfrm_pass" type="password" placeholder="Enter password" class="form-control"></td>       </tr>
           <tr>     <th></th>           <td><button id="login-btn" name="signup_btn" class="btn btn-danger  btn-block"> Create Account</button></td>       </tr>

       	    </form>

        </table>
      </div>
      <div class="modal-footer">
       <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>


<!--   LOGIN SIGNUP MODALS -->



















</div>

 <center class="main w3-animate-zoom"> <h1>  <span><img src="quiz.png" height="50px"></span>  Online Quiz System </h1>  </center>

<center id="para">
 <h3>
 	<div class="container w3-animate-zoom">
 	Unleash your skills to advance level. The more you practice the more you learn 
 	It's better way to become more experienced
  </div>
</h3>

</center>


<div class="row"> 
<center> <form action="startquiz.php"> <button id="get-started-btn" class="btn btn-primary btn-lg w3-animate-zoom">Get Started</button> </form>  </center>
</div>
<br>
<center> <div style="border:1px solid orange; width:50%;"></div>  </center> <br>
<div class="row w3-animate-zoom" id="sub-btn">
<center> 
	<form action="startquiz.php">
<button id="btn-1" class="btn btn-info btn-lg">HTML & CSS</button>
<button id="btn-2" class="btn btn-info btn-lg">PHP & MYSQL</button>
<button id="btn-3" class="btn btn-info btn-lg">PHP OOPS</button>
<button id="btn-4" class="btn btn-info btn-lg">Code Igniter</button>
	</form>

</center>
</div>

<br><br><br>

	</div>



<br>
<center> <h2 style="font-weight:bold;"> <i class="fa fa-free-code-camp" aria-hidden="true"></i> Test Your Skills</h2>  </center>

<div class="container" >
 <center>   <hr style="border:1px solid #00BCD4; width:100%">  </center>



<center>
<a href="startquiz.php">
	<div  class="circle"><h3>Html and css </h3> <img  src="htmlhover.png" height="40px">  </div>
	
</a>


<a href="startquiz.php"><div class="circle "><h3>Php-OOPS</h3>  <img src="phover.png" height="42px"> </div></a>

<a href="startquiz.php"><div class="circle "><h3>Code Igniter</h3>  <img src="cihover.png" height="40px"> </div></a>

<a href="startquiz.php"><div class="circle "><h3>Php & Mysql</h3>  <img src="phover.png" height="42px"> </div></a>


<br> <br> <br>
<a href="startquiz.php">
<button id="explore"  class="btn btn-lg"> <i class="fa fa-bolt" aria-hidden="true"></i> &nbsp;Explore Your Skills</button>
</a>


</center>

<br>
<hr style="border:1px solid #00BCD4; width:100%"> 

</div>







<!--WHY YOU SHULD START HERE-->

<div id="start_jumbo" class="jumbotron ">

<center><h2> <i style="font-size:40px;" class="fa fa-lightbulb-o" aria-hidden="true"></i> &nbsp; Why You Should Start ?</h2></center>
<center>   <hr style="border:1px solid #00BCD4; width:30%">  </center>


<div class="container">
<center>

<p>
Hello you can easily grap your skills this may incerease your work ecperience moreover you can enjoy mire benifits with this
</p>



<br><br>
<a href="#loc">
<button style="border-radius:0px; background-color:#FF5722; color:white; font-weight:bold border:1px solid black;letter-spacing:1px; font-size:18px;" class="btn  btn-lg"> <i class="fa fa-paper-plane" aria-hidden="true"></i>  Contact Us</button>
</a>
</center>

</div>
</div>




<div id="follow-us">

<center> <h2 style="font-weight:bold; color:black;"> Support Us On Social Media.</h2>

	<center>   <hr style=" width:50%">  </center>

			<a href=""><i class="fa fa-facebook" aria-hidden="true"></i>  </a>
			<a href=""><i class="fa fa-twitter" aria-hidden="true"></i>  </a>
			<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i>  </a>
			<a href=""><i class="fa fa-skype" aria-hidden="true"></i></a>

				<center>   <hr style=" width:50%">  </center>			
</center> 





</div>




<div class="container-fluid" id="loc">

<br>
<br>
	
		<div class="col-md-6 ">
		 <center>	<h3> <i class="fa fa-envelope-open" aria-hidden="true"></i> &nbsp;  Contact Me .</h3>   <div style="border:1px solid orange; width:50%"></div> </center>
		 <br>
			<form > 
				<div class="col-md-offset-1 col-md-5">
				<input type="text" style="border-radius:0px;" placeholder="Enter Name" class="form-control ">
			    </div>
				
			    <div class="col-md-offset-1  col-md-5">
				<input type="text" style="border-radius:0px;" placeholder="Enter Email" class=" form-control">
				</div>

				<br><br>
				<div class="col-md-offset-1  col-md-11">
				<textarea placeholder="Enter Your Message Here" rows=10 cols=58 ></textarea>
				<center> <button class="btn btn-danger btn-active btn-lg" style="border-radius:0px;">Leave Message</button> </center>
			    </div>


			</form>
		</div>	
	



			<div class="col-md-6">
				<center><h3> <i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp; My Location.</h3>  <div style="border:1px solid orange; width:50%"></div> </center>
				<br>

				<iframe class="col-md-offset-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3448.216756197849!2d71.51392431461336!3d30.20236038182518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393b3429b4ea2783%3A0x3409b3c51279f380!2sMadni+Chowk!5e0!3m2!1sen!2s!4v1489920357843" width="450" height="268" frameborder="0" style="border:0" allowfullscreen></iframe>

				<div id="dev-contact" class="col-md-offset-2">
					<br>
					<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;  Phone No: 0312-1600686 <br>
					<i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp; Email: aliqureshi.info@gmail.com

				</div>
<br> <br>
			</div>

	



</div>

<div class="container-fluid" id="footer">
<center>Copyright &copy; All Righr Reserved 2017</center>

</div>




















<!-- hover dropdown navbar code -->
// <script type="text/javascript">
// $('ul.nav li.dropdown').hover(function() {
//   $(this).find('.dropdown-menu').stop(true, true).delay(000).fadeIn(000);
// }, function() {
//   $(this).find('.dropdown-menu').stop(true, true).delay(000).fadeOut(000);
// });

// </script>
<!-- end of hover dropdown navbar code -->
 

 
</body>
</html>