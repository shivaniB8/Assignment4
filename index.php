<?php

session_start();
if(isset($_SESSION['username'])){
	$_SESSION['msg']= "You must log in first to view this page";
	header("location: login.php");
}
 if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
  <h1>home page here</h1>
  <?php
    if(isset($_SESSION['success'])) : ?>
  <div>
  	<h3>
  		<?php 
         
         echo $_SESSION['success'];
         unset($_SESSION['success']); 
         ?>
  	</h3>
  </div>
 <?php endif ?>




<?php if(isset($_SESSION['username'])) :  ?>

<button><a href="index.php?logout='1'"></a></button>
 <?php endif ?>




</body>
</html>