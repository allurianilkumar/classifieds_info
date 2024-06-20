<!DOCTYPE html>
<html lang="en">
<?php require '../header/_header.php';?>
<body>
<?php require '../nav_bar/_nav_bar.php';?>
    <center>
     <div class="container" id="sign_up">
        <div class = "col-sm-8" >
         <h2><center> Registration Form</center></h2><hr>
             <form action="index.php" id="user_reg_form" method="post" class="form-horizontal">
                    <div class="form-group">
					  <label class="control-label col-sm-3" for="User_name">User Name :</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-md">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="User_name" placeholder="User name"/>
                        </div>
					  </div>
					</div>
                    <div class="form-group">
					  <label class="control-label col-sm-3" for="Mobile">Mobile :</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-md">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Mobile" placeholder="Mobile"/>
                        </div>
					  </div>
					</div>
                    <div class="form-group">
					  <label class="control-label col-sm-3" for="Email">Email :</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-md">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Email" placeholder="E-Mail"/>
                        </div>
					  </div>
					</div>
                    <div class="form-group">
					  <label class="control-label col-sm-3" for="Password">Password :</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-md">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Password" placeholder="Password"/>
                        </div>
					  </div>
					</div>
                  <div class="form-group">
					  <label class="control-label col-sm-3" for="Confirm_password">Confirm Password :</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-md">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Confirm_password" placeholder="Confirm_password"/>
                        </div>
					  </div>
					</div>
                     <div class="form-group">
					  <label class="control-label col-sm-3" for="Location">Location :</label>
					  <div class="col-sm-8">
						<div class="input-group input-group-md">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                            <input id="info" class="form-control" type="text" name="Location" placeholder="Location"/>
                        </div>
					  </div>
					</div>
                    <input type="submit" name="submit_user_registration" class="btn btn-success" value="Create Account"/>
					 <hr>
                </form>
             </div>
			</div>
        </div>
</center>
<?php require '../header/_javascript.php';?>
</body>
</html>