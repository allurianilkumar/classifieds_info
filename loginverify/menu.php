<?php
session_start(); //Start the session
//define(ADMIN,$_SESSION['loginid']); //Get the user name from the previously registered super global variable
if(!isset($_SESSION['UNAME'])){ //If session not registered
header("location:index.php"); // Redirect to login.php page
}
else //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<html><head><title></title>
    <link rel="stylesheet" style="text/css" href="style.css"/>
</head>
<body>
    <div id="container">
        <div id="top"><center> <h1>GATE LOGS</h1>
            <h2>gives information</h2></center></div>
        <div id="middle">
             <div id="topnav">
    <ul>
        <li><a href="student.php">STUDENT</a></li>
        <li><a href="staff.php">STAFF</a></li>
        <li><a href="bus.php">BUS</a></li>
        <li><a href="outers.php">OUTERS</a></li>
        <li><a href="late_entry.php">LATE_ENTRY</a></li>
        <li><a href="retrival.php">VIEW REPORTS</a></li>
		 <li><a href="logout.php">LOGOUT</a></li>
    </ul>             
            </div>
   </div>
        <div id="bottom1">
      <center><center><P>WELCOME TO GATELOGS</P></center></center>
         </div>
    </div>
    </body>
</html>