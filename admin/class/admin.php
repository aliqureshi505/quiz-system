<?php 


class admin{






	public function __construct(){

		$this->conn = new PDO("mysql:hostname=localhost;dbname=quiz_system","root","");

		

	}


	public function checkDuplicate($array){
		extract($array);
		$query = $this->conn->Query("SELECT * FROM questionare WHERE 
									question = '$qeustion'
									AND option_1 = '$opt1'
									AND option_2 = '$opt2'
									AND option_3 = '$opt3'
									AND correct = '$correct'
									AND cat_name = '$category'");

		if ($query->rowCount()>0) {
			return true;
		}
	}


	public function insertQuiz($array){

		extract($array);

		$query = $this->conn->Query("INSERT INTO questionare (question, option_1, option_2, option_3, correct, cat_name) 
			                VALUES ('$qeustion','$opt1','$opt2','$opt3','$correct','$category' )");

		if ($query->rowCount()>0) {
			
			return true;
		}


	}

		public function manageQuiz($category){

			$query = $this->conn->Query("SELECT * FROM questionare WHERE cat_name='$category' ");

			while($res = $query->fetch(PDO::FETCH_ASSOC)){

				$array[] = $res;

			}
			return $array;



		}




		public function deleteQuiz($quiz_id, $category){

			$query = $this->conn->Query("DELETE FROM questionare WHERE id='$quiz_id'");

			if ($query->rowCount() > 0) {
				return true;
			}
			else{ return false;}


		}



}


?>