<!DOCTYPE html>
<html lang="en">
<head>
  <title>Classifides</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <noscript>&lt;input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"&gt;</noscript>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/super-treadmill.css" />
 <!-- <link rel="stylesheet" href="./css/font-awesome.min.css">-->
	<link rel="stylesheet" href="./css/jquerysctipttop.css">
	
	
	<link rel="stylesheet" href="./css/formValidation.css"/>  
  <link href="./css/home_page.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/post_add1.css">
  <link rel="stylesheet" href="./css/view_add.css">
  <link rel="stylesheet" href="./css/panel-body.css">
  <link rel="stylesheet" href="./css/view_add.css">
  <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
  <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
  <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
  <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
</head>
    
<body>
<?php require 'navbar.php';?>
    <center>
     <div class="container" id="sign_up">
        <div class = "col-sm-6" >
          
         <h1><center> Registration Form</center></h1>
             <form action="index.php" id="user_reg_form" method="post" class="form-horizontal">
                    <div class="form-group">
					  <label class="control-label col-sm-2" for="User_name">UserName</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="User_name" placeholder="User name"/>
                        </div>
					  </div>
					</div>
                    <div class="form-group">
					  <label class="control-label col-sm-2" for="Mobile">Mobile</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Mobile" placeholder="Mobile"/>
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
					  <label class="control-label col-sm-2" for="Password">Password</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Password" placeholder="Password"/>
                        </div>
					  </div>
					</div>
                  <div class="form-group">
					  <label class="control-label col-sm-2" for="Confirm_password">Confirm Password</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Confirm_password" placeholder="Confirm_password"/>
                        </div>
					  </div>
					</div>
                     <div class="form-group">
					  <label class="control-label col-sm-2" for="Location">Location</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-lg">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Location" placeholder="Location"/>
                        </div>
					  </div>
					</div>
                    <input type="submit" name="submit_user_registration" class="btn btn-success" value="Submit"/>
                    <input type="reset" class="btn btn-default" value="back"/>
                </form>
                
             </div>
			</div>
        </div>
</center>
	<script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/formValidation.js"></script>
    <script type="text/javascript" src="js/form_validation_bootstrap.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#user_reg_form').formValidation({
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
                    notEmpty: {
                        message: 'The input is not a valid US phone number'
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
           
            Password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    }
                }
            },
            Confirm_password: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
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
});
</script>
</body>
</html>