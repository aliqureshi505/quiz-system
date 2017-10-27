<?php include("sidebar.php"); ?>
<html>
<head>
	<title></title>
	<style type="text/css">
		.table{margin-top: 30px; }
		.table th{color: #FF5722; }
		.table #id{text-align: center;}
	</style>
</head>
<body>

	<p class="badge">Manage  Question:</p>

	<div class="container">

		<div class="col-md-offset-2  col-md-8 col-md-offset-2 ">
<hr>

		<form action="manage.php" method="post">
		<label>Select Category:</label>
		<select name="category" class="form-control">
			<option>Php Mysqli</option>
			<option>Php OOP</option>
			<option>html & css</option>
			<option>Javascript</option>
			<option>Code-igniter</option>
		</select>

		<br>


				<center> <button name="manage_ques_btn" class="w3-btn w3-large w3-deep-orange">Manage Question</button> </center>

	    </form>	

	  




	 
	
</div>
</div>

<div class="container">
	   <?php 

	   				include_once("class/admin.php");

	   				if (isset($_GET['quizId'] )) {
	   						if (isset($_GET['cat'])) {

	   							$deleteQuiz = new admin();
	   							$deleted = $deleteQuiz->deleteQuiz($_GET['quizId'], $_GET['cat']);
	   							if($deleted){ 
	   									
	   									echo " <br> <div class='col-md-offset-3 col-md-6 col-md-offset-3'>
			     			 <p class='alert alert-success w3-animate-top'> <i class='fa fa-check' aria-hidden='true'></i> &nbsp; Quiz deleted sucessfully ! 
			     			 	<a href='#' class='close' data-dismiss='alert' aria-label='close'> &times; </a>
			     			 </p>
			     			 </div>
			     		     ";


	   								 }			
	   						}
	   				}

		    	if (isset($_POST['manage_ques_btn'])) {

		    			

		    			extract($_POST);
		    			$category = $_POST['category'];
		    			
		    			$manage_ques = new admin();
		    			$manage_quiz[] = $manage_ques->manageQuiz($category);
		    			 //echo "<pre>";
		    			 // print_r($manage_quiz);

		    			
		    			

		    			




		    			echo "<table class='table w3-animate-bottom table-responsive table-striped table-bordered'>"; 	
		    			echo "<tr>    
		    						 <th>Quiz ID</th>   		
		    						 <th>Question</th> 			
		    						 <th>Option-0</th>		
									 <th>Option-1</th>		
		    						 <th>Option-2</th>                 
		    						 <th>Correct</th>     			
		    						 <th>Category</th>  
		    						 <th>Action</th>     
		    				  
		    				   </tr>";


		    			 foreach ($manage_quiz as $key ) {
		    			 	
		    			 	foreach ($key as $key1 ) {

		    			 		//echo $key1['id']."<br>";

		    			 			$quiz_id = $key1['id'];
		    			 			$cat = $key1['cat_name'];
		    			  	  

					    		
					    	echo 	"<tr>    
					    				<form action='manage.php? quizId=$quiz_id&cat=$cat' method='post'>

					    				<td id='id'>$quiz_id</td>    
					    				<td>{$key1['question']}</td>      
					    				<td>{$key1['option_1']}</td>		 
					    				<td>{$key1['option_2']}</td>		 
					    				<td>{$key1['option_3']}</td>                		 
					    				<td> Option-{$key1['correct']}</td>    	      
					    				<td>$cat</td>		
					    				<td><button style='border-radius:0px;' name='delete_quiz' class='btn btn-danger btn-block'>Delete</button> 

					    				 </form>  </td>    

					    			</tr>";

		    	         
		



		    			 	}

		    			 }

		    			 echo  "</table>";

		    			 







		    	}?>

</div>
		   
</body>
</html>