<?php 

// public $question;



 class users{

 	public $category;
 
	

 	public function __construct(){

 		// connection with db

	try{

		$this->conn = new PDO("mysql:hostname=localhost;dbname=quiz_system","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	// end of d connection

 	}
 


 public function createAccount(){



 	 $query = $this->conn->query("INSERT INTO user(name,password) 
 						 VALUES('{$_POST['name']}','{$_POST['pass']}') ");

 	 if($query->rowCount()>0){
 	 	return true;
 	 }
 }


public function verifyLogin(){

	 $query = $this->conn->query(" SELECT * FROM user WHERE name='{$_POST['name']}' AND password='{$_POST['password']}'  AND admin='no' ");

 	 if($query->rowCount()>0){
 	 	return true;
 	 }
}


public function category(){

	 $query = $this->conn->query(" SELECT * FROM category ");

	 while ( $res = $query->fetch(PDO::FETCH_ASSOC) ){

	 	
	 	echo "<option>   {$res['cat_name']}     </option>";

	       }

	 
 	

}



public function showQuestions($select_quiz){


	//echo $select_quiz;

	$query = $this->conn->Query("SELECT * FROM questionare WHERE cat_name='$select_quiz' ");
	while ( $res = $query->fetch(PDO::FETCH_ASSOC) ){

		$this->question[] = $res;



	}
	return $this->question;



}


public function checkResult($data, $cat_name,$total_questions){

		 $correct = 0;
		 $wrong = 0;

     

	$query = $this->conn->Query("SELECT correct FROM questionare WHERE cat_name='$cat_name' ");

	foreach ($data as $key => $value) {
		
		
		//echo "<br> User: ".$value."<br>";



	        while ( $res = $query->fetch(PDO::FETCH_ASSOC) ){



		

		//echo "<br>".$res['correct']."<br>";


		if ($res['correct'] == $value) {
			   $correct++; break; 
			} else{ $wrong++; break; }
			
			    

	  }



	   }

	// echo " <b> Correct Answers: </b> ".$correct;

	// echo " <b> Wrong Answers: </b> ".$wrong;

		


// echo total nomber of questions
//	echo "<b>  Total Questions: $total_questions</b>";


			$percentage = $correct/$total_questions*100;
			 // echo "Percentage".$percentage."%";


			return $aa = array('Correct'=>$correct, 'Wrong'=>$wrong, 'Percentage'=>$percentage);
			
	 }		
	







}

?>