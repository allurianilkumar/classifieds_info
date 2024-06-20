<html>
<head>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <title>Dashboard Sign In, Free Admin Template</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width">        
  <link rel="stylesheet" href="admin_css/templatemo_main.css">
<!-- 
Dashboard Template 
http://www.templatemo.com/preview/templatemo_415_dashboard
-->
</head>
<body>
<?php
if(isset($_POST['admin_sign_in'])) {
	session_start();
	$uname=$_POST['username'];
	$pwd=MD5($_POST['password']);
	$con=mysql_connect("localhost","root","");
	mysql_select_db("classifieds");
	$res=mysql_query("SELECT  `username`, `pwd` FROM `login` WHERE username like '$uname' AND pwd like '$pwd'");
	while($row=mysql_fetch_array($res))
	{
	if($row[0]==$uname && $row[1]==$pwd)
	{				
		echo "login successfully";
		$_SESSION["username"] = $row[0];
		$_SESSION["pwd"] = $row[1];
		header('Location:../Admin/admin_index.php');
	}
	else
		$flag ="false";
	}
	  if($flag ="false")  
	echo"Invalid login";
	mysql_close($con);
}
?>
  <div id="main-wrapper">
    <div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo"><h1>Classiads- Admin</h1></div>
      </div>   
    </div>
    <div class="template-page-wrapper">
      <form action="" method="post" class="form-horizontal templatemo-signin-form" role="form" >
        <div class="form-group">
          <div class="col-md-12">
            <label for="username" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
          </div>              
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" value="Sign in" name="admin_sign_in" class="btn btn-default">
			  <input type="submit" value="Sign up" name="sign_up" class="btn btn-default">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>