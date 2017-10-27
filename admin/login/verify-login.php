<?php 
session_start();



if (isset($_POST['login_btn'])) {
		
	extract($_POST);


	

	include("connection.php");


	
	$query = $conn->prepare("SELECT * FROM user WHERE name=:name  AND password=:password  AND admin='yes' ");
	
   
	$query->execute([
					":name" => "$name",
					":password" => "$password"
		]);

	
	if($query->rowCount()>0){
		
		$_SESSION['admin_logged_in'] = $name;
		echo "Welcome {$_SESSION['admin_logged_in']}";
		header("location:../index.php");
	}

		else{
			header("location:index.php?error=invalidusernameorpassword");
			die();
	}

	
}

?>