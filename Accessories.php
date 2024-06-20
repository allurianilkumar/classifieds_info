<html>
    <head> 
        <title>Accessories - Classifieds</title>
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/super-treadmill.css" />
       <!-- <link rel="stylesheet" href="./css/font-awesome.min.css">-->
        <link rel="stylesheet" href="./css/jquerysctipttop.css">
      <!--  <link href="./css/temp.css" rel="stylesheet">-->
        <link href="./css/home_page.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/post_add1.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
    </head>
    
<body>
<div >
<?php require 'navbar.php';?>
    <div class="col-sm-8" id="grid">
       <div class="panel panel-default">
  <div class="panel-heading">
     <center><span class="glyphicon glyphicon-phone"><h4>Accessories</h4></span></center></div>
  <div class="panel-body">
<div class="col-md-4">
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
                            <a href=""><li><?php echo $fetch['Accessories_name']?></li></a></td>
                            </tr><?php } ?>
                </table>
                <?php 
                }   else
                    {
                        echo "<br><br>No records Found";
                    }
                ?>
        </div> 
        </div>       
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
  <div class = "col-sm-12" id="alert_news">
         <h1><center> Free Alerts</center></h1>
             <form action="contact-us.php"  method="post" class="bs-example bs-example-form" data-example-id="input-group-sizing">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-user"></span>
                        </span>
                        <input id="info" class="form-control" type="text" name="User_name" placeholder="User Name"/>
                    </div></br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </span>
                        <input id="info" class="form-control" type="text" name="Email" placeholder="E-Mail"/>
                    </div></br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-earphone"></span>
                        </span>
                        <input id="info" class="form-control" type="text"  name="Mobile" placeholder="Mobile"/>
                    </div></br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-map-marker"></span>
                        </span>
                        <input id="info" class="form-control" type="text" name="Location" placeholder="Location">
                    </div></br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                       <textarea id="info" type="text" class="form-control" name="Message" placeholder="Message" rows="25" style="height:100px"></textarea>
                    </div><br/>
                    <input type="submit" class="btn btn-success" value="Submit"/>
                    <input type="reset" class="btn btn-default" value="Cancel"/>
                </form>
                </div>

    </div>
    <!-- javascript -->
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
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
    


</body>
</html>