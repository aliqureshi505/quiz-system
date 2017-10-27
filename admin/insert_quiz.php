
<?php 

include("class/admin.php");

echo "<pre>";
var_dump($_POST);

$insert = new admin();

// checking duplication of question
$duplicate = $insert->checkDuplicate($_POST);


// duplicate question exist
if($duplicate == true){
	header("location:add-quiz.php?error=QuizExist");
	die();
}

// duplicate question not exist then insert record
$quiz_Added  =  $insert->insertQuiz($_POST);

if($quiz_Added){ header("location:add-quiz.php?success=QuizAdded"); die(); }


?>