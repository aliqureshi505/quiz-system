<?php include("sidebar.php") ?>

<html>
<head>
	<title></title>
	<style type="text/css">
	.badge{margin-left: 30px; padding:10px; font-size: 15px; background-color: orange;  margin-top: 10px; font-weight: bold;}

	</style>
</head>
<body>

<p class="badge">Add  Question:</p>

	<div class="container">
		<div class="col-md-offset-2 col-md-8 col-md-offset-2">

		
		<?php 
		
			if (isset($_GET['error'])) {
				 if ($_GET['error'] == 'QuizExist') {
				 	
				 	echo " <center> 
			     			 <p class='alert alert-danger w3-animate-top'> <i class='fa fa-info-circle' aria-hidden='true'></i> &nbsp; That Quiz already exist in database!
			     			 	<a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a>
			     			 </p>

			     		     </center>";
				 }
			}



			if (isset($_GET['success'])) {
				 if ($_GET['success'] == 'QuizAdded') {
				 	
				 	echo " <center> 
			     			 <p class='alert alert-success w3-animate-top'> <i class='fa fa-check' aria-hidden='true'></i> &nbsp; Quiz Added Sucessfully !
			     			 	<a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a>
			     			 </p>

			     		     </center>";
				 }
			}


		?>	














<form action="insert_quiz.php" method="post">
		<label>Question:</label>	
		<input type="text" name="qeustion" class="form-control">

		<label>Option 1:</label>	
		<input type="text" name="opt1" class="form-control">

		<label>Option 2:</label>	
		<input type="text" name="opt2" class="form-control">

		<label>Option 3:</label>	
		<input type="text" name="opt3" class="form-control">

		<label>Correct Option:</label>	
		<select name="correct" class="form-control">
			<option value="0">Option 1</option>
			<option value="1">Option 2</option>
			<option value="2">Option 3</option>
		
		</select>

<br>
		<label>Quiz Category:</label>	
		<select name="category" class="form-control">
			<option>Php Mysqli</option>
			<option>Php OOP</option>
			<option>html and css</option>
			<option>Javascript</option>
			<option>Code-igniter</option>
		</select>
<br>
		<center> <button style='width:400px;' name="add_ques_btn" class="w3-btn w3-large w3-deep-orange">Add Question</button> </center>

<br><br>
</form>
		</div>

	</div>

</body>
</html>