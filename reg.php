<?php

    $User_name = $_POST["User_name"];
    $Mobile = $_POST["Mobile"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];
    $Confirm_password = $_POST["Confirm_password"];
    $Location = $_POST["Location"]; 
  
    //DATABASE CONNECTIVITY
    $con=mysql_connect('localhost','root','');
    $conn=mysql_select_db('classifides');
    $res=mysql_query("INSERT INTO `classifide_reg`(`User_name`,`Mobile`,`Email`,`Password`,`Confirm_password`,`Location`) VALUES ('$User_name',  '$Mobile','$Email','Password','Confirm_password','$Location')");
    if($con){
        echo "<center>Data submitted sucessfully</center>";
    }else{
        echo "<center>Data submition is failed</center>";
    }
    mysql_close($con);


?>