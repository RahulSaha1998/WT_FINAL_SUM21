<?php
	require_once 'models/db_config.php';
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$email="";
	$err_email="";
	$pass="";
	$err_pass="";
	$err_db="";
	$hasError=false;
	if(isset($_POST["sign_up"])){
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError=true;
		}else{
			$name=$_POST["name"];
		}
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(!$hasError){
			$rs = insertUser($name,$uname,$_POST["email"],$_POST["pass"]);
			//var_dump($rs);
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = $rs;
			
		}
	}
	else if (isset($_POST["btn_login"])){
		if(empty($_POST["uname"])){
			$err_uname="Username Required";
			$hasError=true;
		}else{
			$uname=$_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$err_pass="Password Required";
			$hasError=true;
		}else{
			$pass=$_POST["pass"];
		}
		if(!$hasError){
			
			if(authenticateUser($_POST["uname"],$_POST["pass"])){
				session_start();
				$_SESSION["loggeduser"] = $_POST["uname"];
				header("Location: dashboard.php");
			}
			$err_db = "Username password invalid";
		}
	}
	
	function insertUser($name,$uname,$email,$pass){
		$query  = "insert into user values (NULL,'$name','$uname','$email','$pass')";
		return execute($query);	
	}
	function authenticateUser($uname,$pass){
		$query ="select * from user where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
		
	}
	
?>