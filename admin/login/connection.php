<?php 

try{
	$conn = new PDO ("mysql:hostname=localhost;dbname=quiz_system", "root","");
	
}

catch(PDOException $e){
echo $e->getMessage();
}

?>