<?php 
	session_start(); 
	include "global.php"; 
	if(isset($_POST['submit'])){ 
	//get stored password from database 
	$sql= "SELECT id,name FROM users WHERE pass='".MD5($_POST['pw'])."'"; 
	$res = mysql_query($sql); 
	if($res){ 
	$row= mysql_fetch_assoc($res); 
	$name= $row['name']; 
	$_SESSION['name'] =$name ; 
	$_SESSION['id'] =$row['id'] ; 
	header("location:editor.php"); 
	}else{ 
	echo "Your details did not match"; 
	exit; 
	} 
	} 
	?>