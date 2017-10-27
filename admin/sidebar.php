<?php include("bs_files.php"); session_start(); ?>
<?php
  if (!isset($_SESSION['admin_logged_in'])) {
       header("location:login/index.php");         
  }

 ?>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="w3.css files/w3.css">


	<title></title>
	<style type="text/css">
  
    .badge{margin-left: 30px; padding:10px; font-size: 15px; background-color: orange;  margin-top: 10px; font-weight: bold;}
  .w3-sidebar{background-color: #DD4B3E; color: white; }
  #main{background-color: #DD4B3E; color: white;}
  .w3-sidebar a{margin-top: 15px; }
   #admin{color: black; background-color: white; padding-left: 23px; font-size: 18px; }

   


	</style>
</head>
<body>







<div class="w3-sidebar w3-bar-block w3-collapse w3-card-2 w3-animate-left  " style="width:200px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  
  <a href="#" id="admin" class="w3-bar-item w3-button"> <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Admin Panel</a>
  <a href="index.php" class="w3-bar-item w3-button"> <i class="fa fa-home" aria-hidden="true"></i>&nbsp; Home</a>

  <a href="add-quiz.php" class="w3-bar-item w3-button"> <i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add Questions</a>

  <a href="manage.php" class="w3-bar-item w3-button"> <i class="fa fa-th-large" aria-hidden="true"></i>&nbsp; Manage Quizes</a>

  <a href="#" class="w3-bar-item w3-button"> <i class="fa fa-id-card" aria-hidden="true"></i>&nbsp;  My Profile</a>

  <a href="logout.php" class="w3-bar-item w3-button"> <i class="fa fa-power-off" aria-hidden="true"></i> &nbsp;Logout Me</a>
</div>


  <div class="w3-main" style="margin-left:200px">
    <div  id="main">
  <button class="w3-button  w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
   <center> <h1>Welcome <?php echo $_SESSION['admin_logged_in']; ?> </h1> </center> 
  </div>
</div>




<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>








</body>
</html>