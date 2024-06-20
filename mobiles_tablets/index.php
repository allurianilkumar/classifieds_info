<html>
<?php require '../header/_header.php';?> 
<body>
<?php require '../nav_bar/_nav_bar.php';?><br>
    <div id="home_li">
		<ul class="list-unstyled" id="home_li_li" style="padding-top:18px;">
		<li style="float: left;"><a href="../index.php">Home</a>&nbsp;<span>&gt;</span></li><li style="float: left;"><a href="index.php">Mobiles,Tablets&Accessories</a>&nbsp;<span>&gt;</span></li>
		<!--<li><span class="act">Best Sales</span>&nbsp;</li>
		</ul>
		<p class="back"><a href="index.php">Back to Previous</a></p>-->
		<div class="clearfix"></div>
		</div>
    <div class="col-sm-8" id="grid" style="padding-top:10px;">
       <div class="panel panel-default">
            <div class="panel-heading">
                <center><h4><span class="glyphicon glyphicon-phone">Mobiles,Tablets&Accessories</span></h4></center>
            </div>
            <div class="panel-body">
            	<ul>
					<li class="col-sm-4 mylist" >
						<ul>
							<h4><a href="../mobiles_tablets/view_sub_products.php">Mobiles</a></h4>
                            <?php
                            $mysqli = new mysqli('localhost','root','','classifieds');
                             $sql = "select * from brand";
                             $res = $mysqli->query($sql);
                            $cnt = $res->num_rows;
                            if ($cnt>0) {
                                        
                            ?>
                            <table border="2px">
                                   <?php while ($fetch = $res->fetch_assoc()) { ?>
                                    <tr>
                                        <a href=""><?php echo $fetch['brand_name']?><br></a></td>
                                        </tr><?php } ?>
                            </table>
                            <?php 
                            }   else
                                {
                                    echo "<br><br>No records Found";
                                }
                            ?>                     
                            
						</ul>
					</li>
					<li class="col-sm-4 mylist">
						<ul>
							<h4><a href="../mobiles_tablets/view_sub_products.php">Tablets</a></h4>
                            <?php
                             $mysqli = new mysqli('localhost','root','','classifieds');
                             $sql = "select * from brand";
                             $res = $mysqli->query($sql);
                            $cnt = $res->num_rows;
                            if ($cnt>0) {
                                        
                            ?>
                            <table border="2px">
                                   <?php while ($fetch = $res->fetch_assoc()) { ?>
                                    <tr>
                                        <a href=""><?php echo $fetch['brand_name']?></a><br></td>
                                        </tr><?php } ?>
                            </table>
                            <?php 
                            }   else
                                {
                                    echo "<br><br>No records Found";
                                }
                            ?>
							</ul>
					</li>
					<li class="col-sm-4 mylist">
						<ul>
							<h4><a href="../mobiles_tablets/view_sub_products.php">Accessories</a></h4>
							
                            <?php
                                $mysqli = new mysqli('localhost','root','','classifieds');
                                 $sql = "select * from accessories";
                                 $res = $mysqli->query($sql);
                                $cnt = $res->num_rows;
                                if ($cnt>0) {        
                            ?>
                            <table border="2px">
                               <?php while ($fetch = $res->fetch_assoc()) { ?>
                                <tr>
                                    <a href=""><?php echo $fetch['Accessories_name']?><br></a></td>
                                    </tr><?php }?>
                            </table>
                            <?php 
                            }else{
                                echo "<br><br>No records Found";
                            }
                            ?>
						</ul>
					</li>
				</ul>
            </div>
        </div>
    </div>
 <div class="col-sm-4" id="sroll">
     <div id="scroll_size">
        <center><h1>Live Items</h1></center>
        <div id="mytreadmill" class="treadmill">
            <div class="treadmill-unit">
                <h2><i class="fa fa-amazon"></i> Breaking News 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet tristique diam, nec pretium libero. </p>
            </div>
            <div class="treadmill-unit">
                <h2><i class="fa fa-facebook"></i> Breaking News 2</h2>
                <p>Morbi elementum lorem eros, quis egestas est placerat ac.  </p>
            </div>
            <div class="treadmill-unit">
                <h2><i class="fa fa-twitter"></i> Breaking News 3</h2>
                <p>Fusce accumsan magna quis arcu dictum, eget ornare tortor ultricies. </p>
            </div>
            <div class="treadmill-unit">
                <h2><i class="fa fa-google-plus"></i> Breaking News 4</h2>
                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
            </div>
            <div class="treadmill-unit">
                <h2><i class="fa fa-linkedin"></i> Breaking News 5</h2>
                <p>Duis varius, justo sed sollicitudin aliquet, velit turpis ultrices tellus, quis aliquam ante ipsum vel libero. </p>
            </div>
            <div class="treadmill-unit">
                <h2><i class="fa fa-firefox"></i> Breaking News 6</h2>
                <p>Proin dui elit, interdum eget quam eget, hendrerit blandit dolor. </p>
            </div>
        </div>
    </div>
    </div>
<?php require '../footer_bar/footer.php';?>
<?php require '../header/_javascript.php';?>
</body>
</html>
