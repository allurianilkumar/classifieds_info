        
				<?php
session_start();
$uname=$_POST['username'];
$pwd=MD5($_POST['pwd']);
$con=mysql_connect("localhost","root","");
mysql_select_db("gatelogs");
$res=mysql_query("SELECT  `username`, `pwd` FROM `login` WHERE username like '$uname' AND pwd like '$pwd'");
while($row=mysql_fetch_array($res))
{
if($row[0]==$uname && $row[1]==$pwd)
{
    $_SESSION["loginid"]=$row[0];
    $_SESSION["UNAME"] = $row[0];
header('Location:menu.php');
}
else
    $flag ="false";
}
  if($flag ="false")  
echo"Invalid login";
mysql_close($con);
?>
<!--select * from login where pwd='".MD5($_POST['pwd'])."'
<//?php 
	session_start(); 
	 
	if(isset($_POST['submit'])){ 
	//get stored password from database 
	$sql= "SELECT username,pwd FROM users WHERE pwd='".MD5($_POST['pwd'])."'"; 
	$res = mysql_query($sql); 
	if($res){ 
	$row= mysql_fetch_assoc($res); 
	$uname=$_POST['username'];
    $pwd=$_POST['pwd']; 
	
    $_SESSION["loginid"]=$row[0];
    $_SESSION["uname"] = $row[1];
	header("location:menu.php"); 
	}else{ 
	echo "Your details did not match"; 
	exit; 
	} 
	} 
	?>-->