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
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <script src="js/jquery-1.11.3.min.js"></script>
        <!--<script src="js/bootstrap.min.js"></script>-->
        <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
        <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
    </head>
<body>
  <?php require 'navbar.php';?>
   <div class="container">
	<div class="row">
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-education"></h4><br/>Education&Learning
                </a>
				<a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-phone"></h4><br/>Mobiles $ Tabs
                </a>
				<a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Electonics
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-education"></h4><br/> Jobs
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-wrench"></h4><br/>Services
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-play"></h4><br/>Entertainment
                </a>
                
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Comunity&Events
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-heart"></h4><br/>Matrimony
                </a>
				 <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-home"></h4><br/>Realestate
                </a>
               
                  <!-- <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Home Store
                </a>
                   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Education
                </a>
                   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Travels
                </a>
                   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Services
                </a>
                   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Entertainment
                </a>
                   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Matrimonial
                </a>
                   <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br/>Bussiness Oppertunites
                </a>-->
                  
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="col-md-push-2 bhoechie-tab-content active">
                <h1 class="glyphicon glyphicon-education" style="font-size:6em;color:#55518a"></h1>
                    <div class="container">
                      <div class="row">

                         <!--<form id="myform" action="post_add2.php">
                          <label for='Color'>Select one color:</label>
                             <p class='container'>
                            <label><input type='radio' name='Color' value='Red' />Red</label>
                            <label><input type='radio' name='Color' value='Green' />Green</label>
                            <label><input type='radio' name='Color' value='Blue' />Blue</label>
                            </p>
                            <input type="submit" name="continue" class="btn btn-success" value="Submit">
                          </form>-->
                         <form id="education_form" action="post_add2.php" method="post">
                          <h1>Education&Learning</h1>
                          <p class='education_container'>
                        <label class="radio-inline">
                          <input type="radio" name="radioGroup" id="radio1" value="Coaching&Tutions">Coaching&Tutions 
                        </label><br>
                        <label class="radio-inline">
                          <input type="radio" name="radioGroup" id="radio2" value="Distance Learning">Distance Learning Classes
                        </label><br>
                        <label class="radio-inline">
                          <input type="radio" name="radioGroup" id="radio3" value="Career Counselling">Career Counselling
                        </label><br>
                        <label class="radio-inline">
                          <input type="radio" name="radioGroup" id="radio3" value="Dance-Music">Dance-Music Classes
                        </label><br>
                        <label class="radio-inline">
                          <input type="radio" name="radioGroup" id="radio3" value="Playschools">Playschools
                        </label><br>
                            </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="continue">
                          </form>
                      </div>
                    </div><br>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-phone" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">

                              <form id="mobiles_form" action="post_add2.php" method="post">
                              <h1>Mobiles&Tablets</h1>
                           <p class='mobiles_container'>  
                              <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Apple">Apple 
                              </label><br>
                              <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Blackberry">Blackberry
                              </label><br>
                              <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Micromax">Micromax
                              </label><br>
                              <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Nokia">Nokia
                              </label><br>
                              <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Accessories">Accessories
                              </label><br>
                           </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                          </div>
                        </div><br>
                    </div>
                </div>
    
                <!-- hotel search -->
              <div class="bhoechie-tab-content">
                  <!--    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-credit-card" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">

                              <form id="electronics_form" action="post_add2.php" method="post" >
                              <h1>Electronics</h1>
                                <p class="electronics_container">  
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Laptops">Laptops
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Desktops">Desktops
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Home Appliances">Home Appliances
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Multimedia">Multimedia
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Accessories">Accessories
                            </label><br>
                                   </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                          </div>
                        </div><br>
                    </div>
                </div>
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-education" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <form id="jobs_form" action="post_add2.php" method="post">
                                <h1>jobs</h1>
                                  <p class='jobs_container'>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Home Based">Home Based Jobs 
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Games Jobs">Games Jobs
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Hospital jobs">Hospital jobs
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Part Time Jobs">Part Time Jobs
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Full Time Jobs">Full Time Jobs
                            </label><br>
                                    </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                          </div>
                        </div><br>
                    </div>
                    
                </div>
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-wrench" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <form id="services_form" action="post_add2.php" method="post">
                              <h1>Services</h1>
                                <p class="services_container">
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Home Services">Home Services
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Home Repair">Home Repair
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Packers&Movers">Packers&Movers
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Broadband">Broadband Services
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Other Categories">Other Categories
                            </label><br>
                            </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                          </div>
                        </div><br>
                    </div>
                </div>
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-play" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <form id="entertainment_form" action="post_add2.php" method="post">
                              <h1>Entertainment</h1>
                                  <p class="entertainment_container">
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Acting">Acting
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Modeling">Modeling Agencies
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Photographers">Photographers
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Script Writers">Script Writers
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Studios">Studios
                            </label><br>
                            </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>      
                          </div>
                        </div><br>
                    </div>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
  <!--                     <center>
                   <h1 class="glyphicon glyphicon-road" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-cutlery" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <form id="community_form" action="post_add2.php" method="post">
                              <h1>Comunity&Events</h1>
                                  <p class='community_container'>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Charity">Charity
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Announcements">Announcements
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Tender Notices">Tender Notices
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Lost-Found">Lost-Found
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Events">Events
                            </label><br>
                            </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                          </div>
                        </div><br>
                    </div>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-heart" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <form id="matrimony_form" action="post_add2.php" method="post">
                              <h1>Matrimmony</h1>
                                  <p class="matrimony_container">
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Grooms">Grooms
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Brides">Brides
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Wedding">Wedding Planners
                            </label><br>
                            </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                            </div>
                        </div><br>
                    </div>
                </div>
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                    </center>-->
                    <div class="col-md-push-2 bhoechie-tab-content active">
                    <h1 class="glyphicon glyphicon-Home" style="font-size:6em;color:#55518a"></h1>
                        <div class="container">
                          <div class="row">
                              <form id="realestate_form" action="post_add2.php" method="post">
                              <h1>Real Estate</h1>
                                  <p class='realestate_container'>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio1" value="Houses - Apartments for Rent ">Houses - Apartments for Rent 
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio2" value="Commercial for rent">Commercial for rent
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Land & plots">Land & plots
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="PG accommodation">PG accommodation
                            </label><br>
                            <label class="radio-inline">
                              <input type="radio" name="radioGroup" id="radio3" value="Shared rooms for rent">Shared rooms for rent
                            </label><br>
                            </p>
                             <!--<button type="button" class="btn btn-success">Continue</button>-->
                            <input type="submit" name="continue" class="btn btn-success" value="Continue">
                          </form>
                          </div>
                        </div><br>
                    </div>
                </div>
                <div class="bhoechie-tab-content">
<!--                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:6em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>-->
                  
                </div>
            </div>
        </div>
  </div>
</div>
	<!-- javascript -->
    <script src="./js/jquery-1.11.3.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
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
        });
    </script>
     <script>
        $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
    </script>
    
	<script>
   $(function()
  {
    $('#education_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Education & Learning<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.education_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
    $('#mobiles_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Mobiles & Tablets<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.mobiles_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
      $('#electronics_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Electronics<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.electronics_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
     $('#jobs_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Jobs<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.jobs_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
      $('#services_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Services<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.services_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
      $('#entertainment_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Entertainment<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.entertainment_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
      $('#community_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Community & Events<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.community_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
      $('#matrimony_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Matrimony<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.matrimony_container') );
            }
            else 
            { // This is the default behavior 
                error.insertAfter( element );
            }
         }
      });
       $('#realestate_form').validate(
      {
        rules:
        {
          radioGroup:{ required:true }
        },
        messages:
        {
          radioGroup:
          {
            required:"Please select sub option for Realestate<br/>"
          }
        },
        errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.realestate_container') );
            }
            else 
            { // This is the default behavior 
                error.insertBefore( element );
            }
         }
      });
  });
    </script>


</body>
</html>