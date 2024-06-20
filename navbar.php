 <nav class="navbar navbar-success navbar-fixed-top" role="navigation" id="nav_col" style="background-color:lavender;">
    <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/momadds/">MOM Adds</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#">Online Shop</a></li>
              <li class="dropdown dropdown-large">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Location <b class="caret"></b></a>
                      <ul class="dropdown-menu dropdown-menu-large row">
                          <div class="form-group">
                             <center><input id="item_search" type="text" class="form-control" placeholder="Type your city here"></center> 
                          </div>
							<?php
								$mysqli = new mysqli('localhost','root','','classifieds');
								$sql = "select * from location";
								$res = $mysqli->query($sql);
								$cnt = $res->num_rows;
								if ($cnt>0) {			
								?>		
								<?php while ($fetch = $res->fetch_assoc()) { ?>
									<li class="col-sm-3">
										<ul>
											<li><a href="#"><?php echo $fetch['name']?></a></li>
										</ul>
									</li>
								<?php } ?>
								<?php 
								}else{
									echo "<br><br>No records Found";
								}
							?>
                      </ul>
                  </li>
             </ul>
        <form class="navbar-form navbar-left" role="search">
           <div class="col-sm-4">
  <div class="input-group" id="item_search">
    <input type="text" class="form-control" placeholder="What are you search for?">
      <span class="input-group-btn">
          <button class="btn btn-success" type="button">Go!</button>
      </span>
  </div><!-- /input-group -->
</div><!-- /.col-lg-6 -->
        </form>
        <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
              <ul id="login-dp" class="dropdown-menu">
                  <li>
                   <div class="row">
                          <div class="col-sm-6"  id="login_size" >
                              <h3>Have an account?</h3>
                              <div class="social-buttons">
                                  <a href="#" class="btn btn-info"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                                  <a href="#" class="btn btn-info"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                              </div>
                              <hr id="smiple_line_for_singn_up">
                              <h3>User Login</h3>
                               <form class="form-horizontal" id="login_form_validator" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
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
                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                  <div class="form-group">
                                     <center><input type="submit" class="btn btn-primary" value="Sign in">
                                      <input type="reset" class="btn btn-default" value="Cancel"/></center>
                                  </div>
                                  <div class="checkbox">
                                       <label>
                                       <input type="checkbox"> keep me logged-in
                                       </label>
                                  </div>
                               </form>
                          </div>
                          <div class="bottom text-center">
                              New here ? <a href="sign_up.php"><b>Sign Up</b></a>
                          </div>
                   </div>
                  </li>
              </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
          <li>
              <form class="navbar-form navbar-left" role="search">
                  <button type="submit" class="btn btn-info" id="post_colr"><a href="post_add1.php">POST FREE ADD</a></button>
              </form>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>