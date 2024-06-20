<!DOCTYPE>
<html>
<?php require '../header/_header.php';?> 
<body>
  <?php require '../nav_bar/_nav_bar.php';?><br>
      <div id="home_li">
		<ul class="list-unstyled" id="home_li_li" style="padding-top: 20px;">
		<li style="float: left;"><a href="../index.php">Home</a><a>&nbsp;<span>&gt;</span></a></li><li style="float: left;"><a href="index.php">Mobiles,Tablets&Accessories</a><a>&nbsp;<span>&gt;</span></a></li><li style="float: left;"><a href="view_sub_products.php">view-sub-products</a><a>&nbsp;<span>&gt;</span></a></li>
		</ul>
		<!--<li><span class="act">Best Sales</span>&nbsp;</li>

		<p class="back"><a href="index.php">Back to Previous</a></p>-->
		<div class="clearfix" style="padding-top: 29px;"></div>
		</div>
  <div class="panel panel-default" id="product_info">
    <div id="tab_down">
      <div class="col-sm-4">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="col-sm-4">
        <div class="input-group">
          <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div><!-- /btn-group -->
          <input type="text" class="form-control" aria-label="...">
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 -->
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
        </ul>
      </div>
    </div>
  </div>
	<div class="container">
		<?php
      // Create connectio
      $conn = new mysqli("localhost", "root", "", "classifieds");
      // Check connection
      if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT  Photos,TableBrand, How_Old, Price, Title, Message, User_Name, Email, Mobile, Land_Line_Number, Locality FROM post_add_mobile ";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo '
            <div class="panel panel-info" id="product_pag">
              <div class="panel-body" id="panelbody_ht">
           	    <center><h4>'.$row["Title"].'</h4></center>
	              <div class="col-sm-4">
                  <h5><b>Message Information</b></h5>
                  <p>'.$row["Message"].'<br>
                    <a href="../mobiles_tablets/view_full_product.php">
                      <button type="button" class="btn btn-primary">view more</button>
                    </a>
                  </p>
                </div>
                <div class="col-sm-4">
                  <h5><b>Image</b></h5>
                  <div class="img">
                    <a target="_blank" href="img-responsive">
                      <img height="100px" width="150px" src="data:image;base64,'.$row["Photos"].' ">
                    </a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <h5><b>User Deatails</b></h5>
                  <label for="text">Name : </label> '.$row["User_Name"].'<br/>
                  <label for="text">Email : </label> '.$row["Email"].'<br/>
                  <label for="text">Mobile : </label> '.$row["Mobile"].'<br/>
                  <button type="button" class="btn btn-primary">Message</button>
                  <button type="button" class="btn btn-primary">Apply</button>
                </div>
              </div>
            </div>
          ';
        }
      } else {
        echo "NO Records Found !!!";
      }
      $conn->close();
    ?>
  </div>
<?php require '../header/_javascript.php';?> 
</body>
</html>
