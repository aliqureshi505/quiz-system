
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
	#bg{background-color: #1CDD2B; padding:6px; color: white; margin-bottom: 20px;}
	.navbar{background-color: #1CDD2B; color: white; border-radius: 0px;}
  .navbar-right li{margin-right: 8px;}
  .icon-bar{border: 1px solid white;}
  .navbar-header button {border: 2px solid white; border-radius: 0px;}
  #login_btn{ background-color: red; border-radius: 0px;}
  #login_btn:hover{background-color: #DD4B3E; color: white;}

	</style>
</head>
<body>

<div class="container-fluid">

	<nav class="navbar navbar-fixed-top w3-animate-zoom ">
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
        <a id="nav_items" class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-pencil" aria-hidden="true"></i> &nbsp; Start Quiz
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

<div class="container">

<?php $cat_name = $_POST['select_quiz'] ; ?>

<hr><hr>  <center> <h4 style="font-weight:bold;"> <?php echo "Quiz: ". $cat_name; ?>  </h4 style="font-weight:bold;">  </center> <hr>

  <div class="col-md-offset-2  col-md-8 col-md-offset-2 ">



 <form action="result.php?cat-name=<?php echo $cat_name ?>   " method="post">


<?php

//var_dump($_POST);

include_once('class/users.php');
$question = new users();
$question->showQuestions($_POST['select_quiz']);

// echo "<pre>";
// print_r( $question->question );



 $question_no = 0;  


foreach ($question->question as $key)  {

	$question_no++; 



  

	echo "<p id='bg'> <b> $question_no. {$key['question']} </b> </p>  ";


	echo "<input type='radio' required value='0' name='$question_no' /> {$key['option_1']} <br>";

	echo "<input type='radio' value='1'  name='$question_no' /> {$key['option_2']}   <br>";

	echo "<input type='radio' value='2'  name='$question_no' /> {$key['option_3']} <br>";


		 

	  echo "<hr>";

}

$total_ques = $question_no;





?>

  <input type="hidden" value="<?php echo $total_ques ?>" name="Total Questions">

<center> <button style="border-radius:0px; font-size:16px;" class="btn btn-success">Submit Quiz</button> </center>

</form>
<br>
<div style="border:1px solid #1CDD2B;"></div> <br>
<div style="border:1px solid #1CDD2B;"></div>

<br>

</body>
</html>

