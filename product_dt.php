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
     <link rel="stylesheet" href="./css/formValidation.css">

    <link href="./fonts/glyphicons-halflings-regular.svg" rel="stylesheet">
    <link href="./fonts/glyphicons-halflings-regular.ttf" rel="stylesheet">
    <link href="./fonts/glyphicons-halflings-regular.woff" rel="stylesheet">
    <link href="./fonts/glyphicons-halflings-regular.woff2" rel="stylesheet">
</head>
<body>
    <?php require 'navbar.php'; ?>
	<div class="container">
		<div class="panel panel-default" id="product_page">
			<div class="panel-body">
				<div class="col-sm-4">	
						<h2>Image</h2>
						<div class="img">
							<a target="_blank" href="img-responsive"><img src="http://www.becloudsmart.com/wp-content/uploads/2014/02/world-internet-1080x675.jpg" alt="Klematis" width="200" height="180"></a>
							<a target="_blank" href="img-responsive"><img src="http://anniekateshomeschoolreviews.com/wp-content/uploads/2015/05/Online-picture1.jpg" alt="Klematis" width="60" height="80"></a>
							<a target="_blank" href="img-responsive"><img src="http://louisluwe.com/wp-content/uploads/2014/11/onlinemlm.png" alt="Klematis" width="50" height="60"></a>
						</div>
				</div>
				<div class="col-sm-4">
					<h2>Product Deatails</h2>
						<address>Role: Software Engineer / Programmer
							Experience: 0 To 1 Years<br>
							Job Type: Full Time<br>
							Job location: Bangalore / Chennai / Hyderabad &Amp; Secunderabad<br>
							Qualification: B.E/B.Tech<br>
							Key skills: Java,.Net<br>
							Posted by: Company<br>
						</address>
				</div>
				<div class="col-sm-4">
					<div>
					<br/>
                         <center> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply</button></center>

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
						<form class="form-horizontal" id="apply_form">
							<div class="form-group">
								<label class="control-label col-xs-3" for="firstName">First Name:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="first_name" placeholder="First Name">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3" for="lastName">Last Name:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" name="last_name" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3" name="dob">Date of Birth:</label>
								<div class="col-xs-3">
									<select class="form-control" name="date">
										<option>Date</option>
									</select>
								</div>
								<div class="col-xs-3">
									<select class="form-control" name="month">
										<option>Month</option>
									</select>
								</div>
								<div class="col-xs-3">
									<select class="form-control" name="year">
										<option>Year</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3" for="Qualification">Qualification:</label>
								<div class="col-xs-8">
									<input type="text" class="form-control" id="ZipCode" name="Qualification" placeholder="Qualification">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3" for="inputEmail">Email:</label>
								<div class="col-xs-8">
									<input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3" for="phoneNumber">Phone:</label>
								<div class="col-xs-8">
									<input type="tel" class="form-control" id="phoneNumber" name="Phone" placeholder="Phone Number">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3" for="Message">Message:</label>
								<div class="col-xs-8">
									<textarea rows="3" class="form-control" id="Message" name="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-xs-3">Gender:</label>
								<div class="col-xs-2">
									<label class="radio-inline">
										<input type="radio" name="gender" value="male"> Male
									</label>
								</div>
								<div class="col-xs-2">
									<label class="radio-inline">
										<input type="radio" name="gender" value="female"> Female
									</label>
								</div>
							</div>
							<div class="form-group">
								<div class="col-xs-offset-3 col-xs-9">
									<label class="checkbox-inline">
										<input type="checkbox" value="agree" name="agree">  I agree to the <a href="#">Terms and Conditions</a>.
									</label>
								</div>
							</div>
							<div class="form-group">
								<center>
									<input type="submit" class="btn btn-success" name="submit" value="Submit"/>
									<input type="reset" class="btn btn-default" data-dismiss="modal" value="Cancel"/>
								</center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
						<!--<center><button type="button" class="btn btn-success">apply</button/></center><br/>-->
						<br><br><center><button type="button" class="btn btn-info btn-lg">back</button/></center>
					</div>
				</div>
			</div>
			<div id="align">
			<h3>Description:To view more details &nbsp;
                
                <input type="button" id="button" value="show"></h3>
                <div id="par">
			<p>Accenture Hiring Software Developers For Engineering Graduates on Sep 2015 @ Across India

				Company Name Accenture Services Pvt Ltd<br>
				Company www.accenture.com<br>
				Experience 0 3 Years<br>
				Salary Not Mentioned<br>
				Qualification BE/ B.Tech Computers<br>
				Skills Cloud Open Stack Architect<br>
				Job Role Software Developers<br>
				Job Location Across India<br>
				Job Type Apply<br>
				Last date to apply Sep 2015<br>
				About Company : Accenture is a global management consulting, technology services and outsourcing company. Combining unparalleled experience, comprehensive capabilities acrossindustries and business functions, and extensive research on the world s most successful companies, Accenture collaborates with clients to help them become high-performance businesses and governments.
				Description :<br>
				Role: Cloud Open Stack Architect
				Eligibility Criteria:<br>
				2014/2015 BE /B.Tech/MCA (Full time course only)
				60% and above in graduation
				No Current Backlog</p>
				<p>Not more than 2 years of gap in education.
				Candidate working with Accenture on contractual basis will not be eligible to participate in this drive.
				Foreign national should mandatorily have OCI / PIO card else candidate will not be eligible to participate in this drive.<br>
				Pan Card is mandatory<br>
				Candidates must be willing to work on shift basis, willing to relocate as per business demand & fixable to work on call taking roles.<br>
				Knowledge and Skills
				Familiarity with IT Systems<br>
				Ability to be flexible and work analytically in a problem-solving environment<br>
				Good communication (written and oral) and interpersonal skills<br>
				Good Voice & Accent<br>
				Ability to resolve technical issues and escalate issues when appropriate<br>
				Good Attitude and willingness to learn<br>
				Job Responsibilities: Responsible for supporting the Service Desk/ IT Infrastructure Monitoring/ Other Infrastructure jobs to ensure services are delivered to meet customer business needs and expectations
				Skill: Cloud Open Stack Architect Minimum Skill Requirement:<br>
				Extensive knowledge on Cloud Open stack Platform.<br>
				Should be involved in the planning, design, and deployment of Cloud solutions.<br>
				The ideal candidate will have an understanding of WAN, LAN, TCP/IP, VPN, networking, and Infrastructure as a Service (IaaS).<br>
				Should be able to perform cost analysis for websites, virtual machines, storage, cloud services, data management within Azure platform
				Preferred Certification in the relevant Skill<br>
				Eligibility : <br>
				Will provide system logical view, network diagram with multi-tier architecture
				Should be able to build solution in patch management for OS, COTS, etc.<br>
				Deliver design and system configuration detail information to Project Team with support documents and Q and A sessions.<br>
				Should have worked on Cloud Administration tasks such as creating Affinity Group, Storage Accounts, Cloud Services, VPN, DNS server and VPN connectivity.<br>
				Conversant in using Microsoft Azure VPN client to set up point-to-site VPN connection.<br>
				Should be able to set up site to site VPN connection between client data center and Azure cloud
				Should be able to create VMs, install CentOS Linux OS on VM servers,
				Create user accounts and Linux security required access control for web server, application server, Hadoop server, graph database server, patch server.<br>
				Build MS SQL Server and create SQL database in data tier.<br>
				Install Apache on web server with Linux OS in web tier.<br>
				Experienced in integrating web server, application server, Hadoop server, graph database server and SQL server with required firewall ports.<br>
				Should have set up Geo-Replication.<br>
				Provide maintenance support (weekly patch install, start/shut down VM servers, services, install COTS).<br>
				Document end-to-end system configuration, setup, and baseline configuration in detail.<br>
				Should be able to analyze data and take decisions 16. Should be able to plan the deliverables and execute on time<br>
				Good to Have:<br>
				Good presentation and documentation skill<br>
				Good inter-personal and analytical skill<br>
				ITIL Process knowledge<br>
				Good in stakeholder management, risk & issue management<br>
				Project Management Skill<br>
				Due-diligence Experience<br>
				Transition Experience<br>

				For Details call @ Souvik Chowdhury 07897752713<br>
				We have 147 more jobs for 'Software Engineer / Programmer jobs for freshers in Hyderabad & Secunderabad'</p>
             </div>
			</div>
		</div>
	</div>
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
            $("#button").click(function () {
              $("#par").toggle(function () {
                  if ($("#button").val() == "Hide") $("#button").val("Show");
                  else $("#button").val("Hide");
              });
            });
        });
    </script>
        
<script type="text/javascript">
$(document).ready(function() {
    $('#apply_form').formValidation({
        message: 'This value is not valid',
        excluded: ':disabled',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
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
            last_name: {
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
            
            dob: {
                validators: {
                    notEmpty: {
                        message: 'The dob is required and can\'t be empty'
                    }
                }
            },
             
            Qualification: {
                validators: {
                    notEmpty: {
                        message: 'The qualification is required and can\'t be empty'
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
            Phone: {
                    validators: {
                        notEmpty: {},
                        digits: {},
                        phone: {
                            country: 'India'
                        }
                    }
                },
           
          
            message: {
                validators: {
                    notEmpty: {
                        message: 'You have to mention the message'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'you should mention gender'
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'you have to accept the terms and polices'
                    }
                }
            },    
        }
    });
});
</script>
	
</body>
</html>