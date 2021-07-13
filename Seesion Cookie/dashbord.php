<?php 
   //session_start();
   //if(!isset($_SESSION["loggeduser"])){
	   if(!isset($_COOKIE["loggeduser"])){
	   header("Location: index.php");
   }
?>   

<html>
  <body>
	<h1 align="center"> Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
	<a href ="addproduct.php"> Add product</a>
	<a href =""> All products</a>
	<a href =""> All Users</a>
	<a href =""> All Categories</a>
  </body>
</html>