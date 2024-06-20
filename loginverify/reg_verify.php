<?php
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$con=mysql_connect("localhost","root","");
mysql_select_db("classifieds");
$res=mysql_query("insert into login(username,pwd)values('$username','".MD5($_POST['pwd'])."')");
//SELECT `id`, `username`, `pwd` FROM `login` WHERE username like 'admin' AND pwd like '0192023a7bbd73250516'
//$res=mysql_query("insert into login(username,pwd)values('$username','$pwd')");
//where pwd='".MD5($_POST['pwd'])."'"

if($res)
{
echo"Registered";
}
else
echo"Invalid login";

mysql_close($con);
?>