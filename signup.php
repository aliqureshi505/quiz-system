<?php 


if (isset($_POST['signup_btn'])) {
	
	extract($_POST);
	//var_dump($_POST);

	include_once("class/users.php");
	$register = new users();

	if ($register->createAccount() ){
		header("location:index.php?msg=accountcreated");
	}

	

}

?>