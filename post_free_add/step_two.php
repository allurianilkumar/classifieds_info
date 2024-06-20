<?php include '../config/_config_database.php';?>
<html>
  <?php require '../header/_header.php';?>
<body>
<?php require '../nav_bar/_nav_bar.php';?>
   <div class="container">
	<div class="row">
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-plane"></h4><br/>Real Estate
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-road"></h4><br/> Jobs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Automobiles
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Mobiles $ Tabs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Electonics
                </a>
               <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Mobiles $ Tabs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-road"></h4><br/> Jobs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Automobiles
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Mobiles $ Tabs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Electonics
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="col-md-push-2 bhoechie-tab-content active">
                <h1 class="glyphicon glyphicon-plane" style="font-size:2em;color:#55518a"></h1>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                                                         
                        <?php
                            if (isset($_POST['continue'])) {
                            if(isset($_POST['radioGroup']))
                            {
                               
                            echo "You have selected :".$_POST['radioGroup']; 
                            }
                            }
                        ?>

                            <center><h1>Post for Real Estate</h1></center>
                            <center><div class="panel panel-center"></center>
                                <div class="panel-body">
                                  <form id="post_add_mobile_formvalidator" class="form-horizontal"  method="post" action="pannel.php">
                                  <form id="post_add_mobile_formvalidator" class="form-horizontal" method="post" action="pannel.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                          <label class="control-label col-sm-2" for="Photos">Photos </label>
                                            <div class="col-sm-8">
                                                <div class="form-group">
                                                    <label for="exampleInputFile"></label>
                                                    <input type="file" id="exampleInputFile" name="Photos"  multiple/>	
                                                </div>
                                            </div>
                                        </div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Table Brand">Brand</label>
					  <div class="col-sm-8"> 		
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-flash"></span>
                            </span>	
                              <?php
                                 
                                  $sql = "SELECT name FROM tablebrand";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      echo '<select class="form-control input-lg" name="TableBrand">';
                                      echo '<option></option>';
                                    while($row = $result->fetch_assoc()) {
                                      echo '<option value='.$row['name'].'>'.$row['name'].'</option>';
                                    }
                                      echo '</select>';
                                  } else {
                                    echo "NO Records Found !!!";
                                  }
                                  
                                ?>
						
					  </div>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="How Old">How Old</label>
					  <div class="col-sm-8">
					  <div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </span>	
                            <?php
                              $sql = "SELECT name FROM how_old";
                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {
                                  echo '<select class="form-control input-lg" name="How_Old">';
                                while($row = $result->fetch_assoc()) {
                                    echo '<option></option>';
                                    echo '<option value='.$row['name'].'>'.$row['name'].'</option>';
                                }
                                  echo '</select>';
                              } else {
                                echo "NO Records Found !!!";
                              }
                              
                            ?>
						
					  </div>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Price">Price</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon">$</span>
                            </span>					 					  
						<input type="Price" class="form-control" id="Price" name="Price"> 
						</div>
					  </div>
					</div>
					<hr id="simple_line"/>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Title">Title </label>
					  <div class="col-sm-8"> 
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </span>					  
						<input type="Title" class="form-control" id="Title"  name="Title" placeholder="your Title">
						</div>
					  </div>
					</div>
					<div class="form-group form group">
					  <label class="control-label col-sm-2" for="Title"><h4>Message</h4></label>
					  <div class="col-sm-8" >
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-comment"></span>
                            </span>
                            <textarea id="comment" type="text area" class="form-control" name="Message" rows="8" placeholder="Message"  name="Message" id="comment" style="margin: 0px;
                            width: 419px;
                            height: 108px;"></textarea>
                        </div>
					  </div>
					</div>
					<hr id="simple_line"/>
                     <div class="form-group">
                     <h2 align="center">User Details</h2>
					  <label class="control-label col-sm-2" for="User_name">User Name</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Username" placeholder="User name"/>
                        </div>
					  </div>
					</div>                 				
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Email">Email</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Email" placeholder="E-Mail"/>
                        </div>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Price" >Mobile</label>
					  <div class="col-sm-8"> 
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone"></span>
                            </span>							
							<input type="Mobile Number" class="form-control" id="Mobile Number" name="Mobile" placeholder="10 digit Number">
						</div>
					  </div>
					</div>
					<div class="form-group">
					  <label class="control-label col-sm-2" for="Land Line Number">Land Line Number</label>
					  <div class="col-sm-8">  
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-phone-alt"></span>
                            </span>	
							<input type="Land Line Number" class="form-control" id="Land Line Number"  name="Land_Line_Number" placeholder="enter your Land Line Number">
						</div>
					  </div>
					</div>
                     <div class="form-group">
						<label class="control-label col-sm-2" for="You are">You Are </label>
						<div class="col-sm-8"> 
							<div class="checkbox">
								<label><input type="checkbox" name="you_are">Business </label>
								<label><input type="checkbox" name="you_are">Owner </label>
							</div>
						</div>
					</div>                   
					<div class="form-group">
						<label class="control-label col-sm-2" for="Locality">Locality</label>
						<div class="col-sm-8"> 
							<div class="input-group input-group-lg">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-globe"></span>
								</span>
				                <?php
                                  $sql = "SELECT name FROM locality";
                                  $result = $conn->query($sql);
                                  if ($result->num_rows > 0) {
                                      echo '<select class="form-control input-lg" name="Locality">';
                                      echo '<option></option>';
                                    while($row = $result->fetch_assoc()) {
                                      echo '<option value='.$row['name'].'>'.$row['name'].'</option>';
                                    }
                                      echo '</select>';
                                  } else {
                                    echo "NO Records Found !!!";
                                  }
                                  
                                ?>

							</div>
						</div>
					</div>       
					<hr id="simple_line"/>
					<center><input type="submit" name="post_free_add" class="btn btn-success" value="Post Your Add"/>
                        <input type="reset" class="btn btn-default" value="Cancel"/></center>
				</form>
			</div>
		</div>
                       
                      </div>
                    </div><br>
            </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-road" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Jobs</h1>
                           
                          </div>
                        </div><br>
                   
                    </div>
                </div>
    
                <!-- hotel search -->
              <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-home" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Education</h1>
                           
                          </div>
                        </div><br>
                    
                    </div>
                </div>
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Automobiles</h1></h1>
                           
                          </div>
                        </div><br>
                  
                    </div>
                    
                </div>
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Mobiles</h1>
                            
                          </div>
                        </div><br>
                   
                    </div>
                </div>
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Electronics</h1>
                           
                          </div>
                        </div><br>
                   
                    </div>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Education</h1>
                            
                          </div>
                        </div><br>
                   
                    </div>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-home" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Matrimony</h1>
                            
                          </div>
                        </div><br>
                   
                    </div>
                </div>
                <div class="bhoechie-tab-content">                  
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Services</h1>
                           
                          </div>
                        </div><br>
                   
                    </div>
                </div>
                <div class="bhoechie-tab-content">
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-credit-card" style="font-size:2em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <h1>Post for Loans</h1>
                           
                          </div>
                        </div><br>
                   
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>
        
	<?php
	    // Create connection
        $conn = new mysqli("localhost", "root", "", "classifieds");
        if($conn) {
        	if(isset($_POST['post_free_add'])) {
	        	$Photos = $_POST["Photos"];
			    $TableBrand = $_POST["TableBrand"];
			    $How_Old = $_POST["How_Old"];
			    $Price = $_POST["Price"];
			    $Title = $_POST["Title"];
			    $Message = $_POST["Message"];
			    $user_name = $_POST["user_name"];
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
	         $conn->close();

        }else{
            die('Something went wrong while connecting to MySQL');
        }
	?>

	<!-- javascript -->
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/formValidation.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/super-treadmill.js"></script>
    <script type="text/javascript" src="../js/form_validation_bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mytreadmill').startTreadmill({
                runAfterPageLoad: true,
                        direction: "down",
                        speed: "medium",
                        viewable: 3,
                        pause: false
            });
            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
            $('#post_add_mobile_formvalidator').formValidation({
                message: 'This value is not valid',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    TableBrand: {
                        validators: {
                            notEmpty: {
                                message: 'The brand is required and can\'t be empty'
                            }
                        }
                    },
                    How_Old: {
                        validators: {
                            notEmpty: {
                                message: 'You have to enter this field'
                            }
                        }
                    },
                    Price: {
                        validators: {
                            notEmpty: {
                                message: 'The country is required and can\'t be empty'
                            }
                        }
                    },
                    Title: {
                        validators: {
                            notEmpty: {
                                message: 'You have to accept the terms and policies'
                            }
                        }
                    },
                    Message: {
                        validators: {
                            notEmpty: {
                                message: 'The message should be large'
                            },
                        }
                    },
                    Username: {
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
                            notEmpty: {},
                            digits: {},
                            phone: {
                                country: 'India'
                            }
                        }
                    },
                     Land_Line_Number: {
                        validators: {
                            notEmpty: {},
                            digits: {},
                            phone: {
                                country: 'India'
                            }
                        }
                    },
                    you_are: {
                        validators: {
                            notEmpty: {
                                message: 'The type you are is required'
                            }
                        }
                    },
                   Locality: {
                       validators: {
                            notEmpty: {
                                message: 'The location is required and can\'t be empty'
                            }
                         }
                    },
                }
            });
        });
</script>
</body>
</html>