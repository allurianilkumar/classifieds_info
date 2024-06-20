<!DOCTYPE>
<html>
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

    <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
    <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
    <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
    <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
</head>
<body>
    <?php require 'navbar.php'; ?>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "classifieds";
        $mobi = "1234567898";
        // Create connectio
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <?php 
    	$sql = "SELECT * FROM `post_add_mobile` WHERE Mobile='$mobi'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                echo '
			        <div class="container">
						<div class="panel panel-default" id="product_page">
							<div class="panel-body">
								<div class="col-sm-4">
									<h3>Image</h3>
										<div class="img">
											<a target="_blank" href="img-responsive"><img src="http://www.becloudsmart.com/wp-content/uploads/2014/02/world-internet-1080x675.jpg" alt="Klematis" width="200" height="180"></a>
											<a target="_blank" href="img-responsive"><img src="http://anniekateshomeschoolreviews.com/wp-content/uploads/2015/05/Online-picture1.jpg" alt="Klematis" width="60" height="80"></a>
											<a target="_blank" href="img-responsive"><img src="http://louisluwe.com/wp-content/uploads/2014/11/onlinemlm.png" alt="Klematis" width="50" height="60"></a>
										</div>
								</div>
								<div class="col-sm-4">
									<h3>Product Deatails</h3>
										<address>
											<h4>TableBrand	: '.$row["TableBrand"].'<br>
											<h4>How_Old	: '.$row["How_Old"].'<br><h4>
											<h4>Price : '.$row["Price"].'<br></h4>
											<h4>Title : '.$row["Title"].'<br></h4>
										</address>
								</div>
								<div class="col-sm-4">
								<div>
									<h3>User Information<br></h3><h4>
									Name : '.$row["User_Name"].'<br>
									Email : '.$row["Email"].'<br>
									Mobile : '.$row["Mobile"].'<br>
									Land Line Number : '.$row["Land_Line_Number"].'<br>
									Locality : '.$row["Locality"].'</h4>
				                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply</button></center>
				                    <button type="button" class="btn btn-default btn-lg">back</button/>
									<!-- Modal -->
									<div class="modal fade" id="myModal" role="dialog">
										<div class="modal-dialog">
										  <!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
												  <button type="button" class="close" data-dismiss="modal">&times;</button>
												  <h4 class="modal-title">Apply Here</h4>
												</div>
												<div class="modal-body">
													<div class="bs-example">
														<form class="form-horizontal">
															<div class="form-group">
																<label class="control-label col-xs-3" for="firstName">First Name:</label>
																<div class="col-xs-8">
																	<input type="text" class="form-control" id="firstName" placeholder="First Name">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3" for="lastName">Last Name:</label>
																<div class="col-xs-8">
																	<input type="text" class="form-control" id="lastName" placeholder="Last Name">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3">Date of Birth:</label>
																<div class="col-xs-3">
																	<select class="form-control">
																		<option>Date</option>
																	</select>
																</div>
																<div class="col-xs-3">
																	<select class="form-control">
																		<option>Month</option>
																	</select>
																</div>
																<div class="col-xs-3">
																	<select class="form-control">
																		<option>Year</option>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3" for="Qualification">Qualification:</label>
																<div class="col-xs-8">
																	<input type="text" class="form-control" id="ZipCode" placeholder="Qualification">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3" for="inputEmail">Email:</label>
																<div class="col-xs-8">
																	<input type="email" class="form-control" id="inputEmail" placeholder="Email">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
																<div class="col-xs-8">
																	<input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3" for="Message">Message:</label>
																<div class="col-xs-8">
																	<textarea rows="3" class="form-control" id="Message" placeholder="Message"></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-xs-3">Gender:</label>
																<div class="col-xs-2">
																	<label class="radio-inline">
																		<input type="radio" name="genderRadios" value="male"> Male
																	</label>
																</div>
																<div class="col-xs-2">
																	<label class="radio-inline">
																		<input type="radio" name="genderRadios" value="female"> Female
																	</label>
																</div>
															</div>
															<div class="form-group">
																<div class="col-xs-offset-3 col-xs-9">
																	<label class="checkbox-inline">
																		<input type="checkbox" value="agree">  I agree to the <a href="#">Terms and Conditions</a>.
																	</label>
																</div>
															</div>
															<div class="form-group">
																<center>
																	<input type="submit" class="btn btn-success" value="Submit"/>
																	<input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancel"/>
																</center>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
							  		<!-- End-Modal -->			
									</div>
								</div>
							</div>
							<div class="row">
								<h4 class="col-md-offset-1">Description :  To view more details &nbsp;
				                <input type="button" id="button" value="show"></h4>
				                <div class="col-md-offset-1" id="par">
									<p id="item_full_description">'.$row["Message"].' </p>
				             	</div>
							</div>
						</div>
					</div>
				';
          }
        } else {
          echo "0 results";
        }
    
    ?>
        	<!-- javascript -->
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
<!--<script src="./js/libs/modernizr-2.6.2.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/gumby.min.js"></script>
    <script src="./js/main.js"></script>-->
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
            $("#button").click(function () {
              $("#par").toggle(function () {
                  if ($("#button").val() == "Hide") $("#button").val("Show");
                  else $("#button").val("Hide");
              });
            });
        });
    </script>
</body>
</html>
