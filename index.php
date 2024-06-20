<html>
    <head> 
        
        <title>MOM Adds</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/super-treadmill.css" />
       	<!-- <link rel="stylesheet" href="./css/font-awesome.min.css">-->
        <link rel="stylesheet" href="./css/jquerysctipttop.css">
      	<!--  <link href="./css/temp.css" rel="stylesheet">-->
        <link href="./css/home_page.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/post_add1.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/formValidation.css">
        <link rel="stylesheet" href="./css/footer.css">

        <!--<script src="js/bootstrap.min.js"></script>-->
        <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
    </head>
 <body>
<?php require './nav_bar/_nav_bar.php';?>
     
    <div id="home_li">
          <ul class="list-unstyled" id="home_li_lk">
            <li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
            <!--<li><span class="act">Best Sales</span>&nbsp;</li>
          </ul>
          <p class="back"><a href="index.php">Back to Previous</a></p>-->
<!--           <div class="clearfix"></div> -->
    </div>
    <div class="row">
    <div class="col-sm-8" id="grid">
        <div id="home_gride">
            <div class="home-gride-container">
                <div class="home-gride-data">
                    <?php
                        $mysqli = new mysqli('localhost','root','','classifieds');
                        $sql = "SELECT `product_id`, `name`, `glyphicons_class`, `path` FROM `product_title`";
                        $res = $mysqli->query($sql);
                        $cnt = $res->num_rows;
        
                        if ($cnt>0) {			
                        ?>		
                        <?php while ($fetch = $res->fetch_assoc()) { ?>
                            <li class="col-md-4">
                                <ul>
                                    <li>
                                        <a href="<?php echo $fetch['path']?>" class="<?php echo $fetch['glyphicons_class']?>"><i></i>
                                        <span><?php echo $fetch['name']?></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                        <?php 
                        }else{
                            echo "<br><br>No records Found";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
 <div class="col-sm-4" id="sroll">
    <!--  -->
    <p>www.momcomputer.com</p>
</div>
     <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "classifieds";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn) {
            if(isset($_POST['submit_useralert']))
            {
    
                $User_name = $_POST["User_name"];
                $Email = $_POST["Email"];
                $Mobile = $_POST["Mobile"];
                $Location = $_POST["Location"];

                $result = "INSERT INTO `useralert`(`User_name`, `Email`, `Mobile`, `Location`) VALUES ('$User_name', '$Email', '$Mobile', '$Location')";
                if ($conn->query($result) === TRUE) {
                    /*echo "<h1><center>Submited Successfully</center></h1>";*/
                } else {
                    echo "<h1><center>Error: " . $result . "<br>" . $conn->error . "<center></h1>";
                }
                $conn->close();
            }
            if(isset($_POST['submit_user_registration'])) {
                $User_name = $_POST["User_name"];
                $Mobile = $_POST["Mobile"];
                $Email = $_POST["Email"];
                $Password = $_POST["Password"];
                $Confirm_password = $_POST["Confirm_password"];
                $Location = $_POST["Location"];
    
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $result = "INSERT INTO `classifide_reg`(`User_name`,`Mobile`,`Email`,`Password`,`Confirm_password`,`Location`) VALUES ('$User_name',  '$Mobile','$Email','Password','Confirm_password','$Location')";
                if ($conn->query($result) === TRUE) {
                   /* echo "<h1><center>Submited Successfully</center></h1>";*/
                } else {
                    echo "<h1><center>Error: " . $result . "<br>" . $conn->error . "<center></h1>";
                }
                $conn->close();
            }
        }else{
            die('Something went wrong while connecting to MySQL');
        }
    ?>
     
     </div>

    <!-- <div class = "col-md-12" id="alert_news">
        <h1><center> Free Alerts</center></h1>
            <form action="<#?=$_SERVER['PHP_SELF'];?>" method="post" id="alert_form" class="form-horizontal" >
         <form id="registration-form" class="form-horizontal">
                  <div class="form-group">
					  <label class="control-label col-sm-2" for="User_name">Username</label>
					  <div class="col-sm-9">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="User_name" placeholder="User name"/>
                        </div>
					  </div>
					</div>
                    <div class="form-group">
					  <label class="control-label col-sm-2" for="Email">Email</label>
					  <div class="col-sm-9">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Email" placeholder="E-Mail"/>
                        </div>
					  </div>
					</div>
                    <div class="form-group">
					  <label class="control-label col-sm-2" for="Mobile">Mobile</label>
					  <div class="col-sm-9">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Mobile" placeholder="Mobile"/>
                        </div>
					  </div>
					</div>
                     <div class="form-group">
					  <label class="control-label col-sm-2" for="Location">Location</label>
					  <div class="col-sm-9">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Location" placeholder="Location"/>
                        </div>
					  </div>
					</div>
                    <div class="form-actions">
                        <center>
                        <input type="submit" name="submit_useralert" class="btn btn-success" value="Active Alerts"></input>
                        <input type="reset" class="btn btn-default" value="Cancel"></input></center>
                    </div>
            </form>
    </div> -->
    <?php require './footer_bar/footer.php';?>
	<!-- javascript -->
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="js/formValidation.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/super-treadmill.js"></script>
    <script type="text/javascript" src="./js/form_validation_bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mytreadmill').startTreadmill({
                runAfterPageLoad: true,
                        direction: "down",
                        speed: "medium",
                        viewable: 3,
                        pause: false,
            });
        
        $('#alert_form').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                User_name: {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and can\'t be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        }
                    }
                },
                 Mobile: {
                    validators: {
                        notEmpty: {},
                        digits: {},
                        phone: {
                            country: 'India'
                        }
                    }
                },
                 Email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                Location: {
                    validators: {
                        notEmpty: {
                            message: 'You have to mention the location'
                        }
                    }
                },
            }
        });
            
         $('#login_form_validator').formValidation({
            message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                 Email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                 Password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and can\'t be empty'
                        }
                    }
                },
            }
        });    
    });
    </script>
              
 
</body>
</html>
