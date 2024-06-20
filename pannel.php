  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "classifieds";
        $mobi = "1234567898";
        // Create connectio
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
     ?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>Classifides</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/super-treadmill.css" />
        <!-- <link rel="stylesheet" href="./css/font-awesome.min.css">-->
        <link rel="stylesheet" href="./css/jquerysctipttop.css">
        <!--  <link href="./css/temp.css" rel="stylesheet">-->
        <link href="./css/home_page.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/post_add1.css">
         <link rel="stylesheet" href="./css/view_add.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/panel.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
    </head>
<body>
<?php require 'navbar.php';?>

<div id="add_post_priview">
  <div class="container">
    <div class = "col-sm-8">
      <div center class="panel panel-default">
        <div class="panel-body">
          <div><strong>Thanks for posting your ad on classifide</strong><span class="color_grey"> </span></div>
          <div>Your Ad would look like this </div>
      <?php
       // Create connection
        $conn = new mysqli("localhost", "root", "", "classifieds");
        if($conn) {
          if(isset($_POST['post_free_add'])) {
            // Photos Logic Information
            if(getimagesize($_FILES['Photos']['tmp_name']) == FALSE) {
                echo "Please select an image.";
            }
            $Photos = addslashes($_FILES['Photos']['tmp_name']);
            $Photos = file_get_contents($Photos);
            $Photos = base64_encode($Photos);
            $TableBrand = $_POST["TableBrand"];
            $How_Old = $_POST["How_Old"];
            $Price = $_POST["Price"];
            $Title = $_POST["Title"];
            $Message = $_POST["Message"];
            $user_name = $_POST["username"];
            $Email = $_POST["Email"];
            $Mobile = $_POST["Mobile"];
            $Land_Line_Number= $_POST["Land_Line_Number"];
            $Locality = $_POST["Locality"];
            // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              $result = "INSERT INTO `post_add_mobile`(`Photos`,`TableBrand`,`How_Old`,`Price`,`Title`,`Message`,`User_Name`,`Email`,`Mobile`,`Land_Line_Number`,`Locality`) VALUES ('$Photos',  '$TableBrand','$How_Old','$Price','$Title','$Message','$user_name','$Email','$Mobile','$Land_Line_Number','$Locality')";
              if ($conn->query($result) === TRUE) {
                 echo "<h1><center>Submited Successfully</center></h1>";
              } else {
                  echo "<h1><center>Error: " . $result . "<br>" . $conn->error . "<center></h1>";
              }
          }
        }else{
            die('Something went wrong while connecting to MySQL');
        }
      ?>
          <div>Your Ad will be reviewed shortly. Once approved, it will go live and be visible on the site.</div>
        </div>
      </div>
      
      <div class="panel panel-default">
        <div class="panel-body">
          <?php
                // Create connectio
                $conn = new mysqli("localhost", "root", "", "classifieds");
                // Check connection
                if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT  TableBrand, How_Old, Price, Title, Message, User_Name, Email, Mobile, Land_Line_Number, Locality FROM post_add_mobile ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                     while($row = $result->fetch_assoc()) {
                         echo "<h3><br> TableBrand: ".$row["TableBrand"]."<br>How_Old: ".$row["How_Old"]."<br> Price: ".$row["Price"]."<br>Title: ".$row["Title"]."<br> Message: ".$row["Message"]."<br> User Name: ".$row["User_Name"]."<br> Email: ".$row["Email"]."<br> Mobile: ".$row["Mobile"]."<br>Land_Line_Number: ".$row["Land_Line_Number"]."<br> Locality: ".$row["Locality"]. "<br></h3>";
                     }
                } else {
                  echo "0 results";
                }
                $conn->close();
          ?>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="button">
        <?php echo @$test;?>
        <button type="button" class="btn btn-primary">Reply This Ad</button>
      </div>
    </div>
  </div>

  <div class="container">
    <div class = "col-sm-8">
      <div class="panel panel-default">
        <div class="pnl1-newvap ad-preview-panel white_box ">
          <h4 id="sub_tags">Contact buyers of Coaching &amp; Tuitions in Hyderabad &nbsp;&nbsp;<a>View List</a>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="pnl1-newvap ad-preview-panel white_box ">
          <h4 id="sub_tags">Contact buyers of Coaching &amp; Tuitions in Hyderabad &nbsp;&nbsp;
          <a>View List</a></h4>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="pnl1-newvap ad-preview-panel white_box ">
          <h4 id="sub_tags">Contact buyers of Coaching &amp; Tuitions in Hyderabad &nbsp;&nbsp;<a>View List</a></h4>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="pnl1-newvap ad-preview-panel white_box ">
          <h4 id="sub_tags">Contact buyers of Coaching &amp; Tuitions in Hyderabad &nbsp;&nbsp;<a>View List</a></h4>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {

    $(".player").mb_YTPlayer();

});
</script>

</body>
</html>
