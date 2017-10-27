<?php 

include_once('class/users.php');
$checkResult = new users();

// category name
$cat_name = $_GET['cat-name'];

// total no of questions
$total_questions = $_POST['Total_Questions'];

// checkResult function
$result = $checkResult->checkResult($_POST, $cat_name,$total_questions );
extract($result);


?>


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
	#bg{background-color: #1CDD2B; padding: 5px 5px 5px 10px; color: black;}
	.navbar{background-color: #1CDD2B; color: black; border-radius: 0px;}
	.table tr th{text-align: center;}

	</style>
</head>
<body>

<div class="container">

	

<hr>
<hr>
<hr>

<div class="col-md-offset-3 col-md-6 col-md-offset-3">


<center> <h2>  Result: </h2> </center>

<?php if($Percentage >= 50){ $quiz_passed = true; } else{ $quiz_failed = true; } ?>
<?php if (isset($quiz_passed)) { ?>
	

<center>  <p class="alert alert-success "> You have sucessfully passed the quiz ! <a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a> </p>  </center>

<?php } 

elseif (isset($quiz_failed)) { ?>
	
	<center>  <p class="alert alert-danger "> You failed to pass the quiz ! <a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a> </p>  </center>


 <?php } ?>



<table class="table table-bordered">

	<tr class="warning"> <th colspan=2>Total No of Question: <?php echo $total_questions ?></th>  </tr>
	<tr>  <th class="success"> <i class="fa fa-check" aria-hidden="true"></i> Right Answers</th>  <th class="danger"> <i class="fa fa-times" aria-hidden="true"></i> Wrong Answers</th>   </tr>
	<tr>  <th><?php echo $Correct ?></th>  <th><?php echo $Wrong ?></th>   </tr>
	<tr >  <th colspan=2 class="info">  Percentage: <?php echo $Percentage; ?> <i class="fa fa-percent" aria-hidden="true"></i> </th>  </tr>

</table>

</div>
</div>
<hr><hr><hr>



</body>
</html>