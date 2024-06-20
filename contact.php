<html>
    <head> 
        <title>Classifides</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/super-treadmill.css" />
        <!-- <link rel="stylesheet" href="./css/font-awesome.min.css">-->
        <link rel="stylesheet" href="./css/jquerysctipttop.css">
        <!--  <link href="./css/temp.css" rel="stylesheet">-->
        <link href="./css/home_page.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/post_add1.css">
         <link rel="stylesheet" href="./css/view_add.css">
         <link rel="stylesheet" href="./css/contact.css">
        <link rel="stylesheet" href="./css/formValidation.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
    </head>
 <body>
<?php require 'navbar.php';?>
<section id="contact-info">
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-left">
                    <div class="gmap">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15226.710907765815!2d78.453511!3d17.427247!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57041885856ace8a!2sHackrons+IT+Network+Solutions!5e0!3m2!1sen!2sin!4v1443857905317">
                        </iframe>
                    </div>
                </div>
                <div class="col-sm-4 map-content">
                    <ul class="row">
                        <li>
                            <address>
                                <h5>MOM Computer Institutions</h5>
                                <p>Anjaiah Road,<br>Ongole.</p>
                                <p>Mobile: +91 8184943954<br>
                                Email: momassignments@gmail.com</p>
                            </address>
                            <address>
                                <h5></h5>
                                
                            </address>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 map-content" id="contact_ht">
                    <div id="dropmessge">
                       <h1><center> Contact Us</center></h1>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="bs-example bs-example-form" data-example-id="input-group-sizing" id="contact_form">
                        <div class="form-group">
					  <label class="control-label col-sm-2" for="User_name"></label>
					  <div class="col-sm-10">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="User_name" placeholder="User name"/>
                        </div>
					  </div></br>
					</div></br>
                        <div class="form-group">
					  <label class="control-label col-sm-2" for="Email"></label>
					  <div class="col-sm-10">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Email" placeholder="E-Mail"/>
                        </div>
					  </div></br>
					</div></br>
                      <div class="form-group">
					  <label class="control-label col-sm-2" for="Mobile"></label>
					  <div class="col-sm-10">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Mobile" placeholder="Mobile"/>
                        </div>
					  </div></br>
					</div></br>
                        <div class="form-group">
					  <label class="control-label col-sm-2" for="Location"></label>
					  <div class="col-sm-10">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Location" placeholder="Location"/>
                        </div>
					  </div></br>
					</div></br>
                        <div class="form-group">
					  <label class="control-label col-sm-2" for="User_message"></br></label>
					  <div class="col-sm-10">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="User_message" placeholder="Message"/>
                        </div>
					  </div></br>
					</div></br><center>
                        <input type="submit" name="submit_contact" class="btn btn-success" value="Submit"/>
                        <input type="reset" class="btn btn-default" value="Cancel"/></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->
  <?php
        if(isset($_POST['submit_contact'])) {
            
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "classifidies";
            
            $User_name = $_POST["User_name"];
            $Email = $_POST["Email"];
            $Mobile = $_POST["Mobile"];
            $Location = $_POST["Location"]; 
            $User_message = $_POST["User_message"];
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $result = "INSERT INTO `contact_form`(`User_name`, `Email`, `Mobile`, `Location`, `User_message`) VALUES ('$User_name', '$Email', '$Mobile', '$Location', '$User_message')";
            if ($conn->query($result) === TRUE) {
               /* echo "<h1><center>Submited Successfully</center></h1>";*/
            } else {
                echo "<h1><center>Error: " . $result . "<br>" . $conn->error . "<center></h1>";
            }
            $conn->close();
        }
    ?>
	<!-- javascript -->
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidation.js"></script>
    <script type="text/javascript" src="js/form_validation_bootstrap.js"></script>
    <script type="text/javascript" src="./js/super-treadmill.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mytreadmill').startTreadmill({
                runAfterPageLoad: true,
                        direction: "down",
                        speed: "medium",
                        viewable: 3,
                        pause: false
            });
        });
    </script>
   <script type="text/javascript">
    $(document).ready(function() {
        $('#contact_form').formValidation({
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
               
                 Mobile: {
                    validators: {
                        notEmpty: {
                            message: 'The input is not a valid US phone number'
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
                 User_message: {
                    validators: {
                        notEmpty: {
                            message: 'You have to mention the text message'
                        }
                    }
                },
            }
        });
    });
</script>
</body>
</html>
