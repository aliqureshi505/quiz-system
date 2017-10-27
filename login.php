<?php 
session_start();

if (isset($_POST['login_btn'])) {
	
	include_once("class/users.php");
	extract($_POST);
	var_dump($_POST);

	$login = new users();


	if( $login->verifyLogin() ){
		$_SESSION['user_name'] = $_POST['name'];
		$_SESSION['logged_in'] = true;
		header("location:index.php?login=true");
	}
	else{
		header("location:index.php?login=false");
	}


	



}
?>