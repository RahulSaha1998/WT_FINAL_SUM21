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
	<a href =""> Add product</a>
	<a href =""> All products</a>
	<a href =""> All Users</a>
	<a href =""> All Categories</a>
	<br>
	<form action="" method="post">
	   Id:<input type="text" name="uname" value=""> <br>
	   Name:<input type="text" name="uname" value=""> <br>
	   Quantity:<input type="text" name="uname" value=""> <br>
	   Prize:<input type="text" name="uname" value=""> <br>
	   Description:<input type="text" name="uname" value=""> <br>
	   
	   <input type="submit" value="Add">
	 </form>
  </body>
</html>