	<!-- javascript -->
    <script src="../js/jquery-1.11.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
	<!-- Form Vallidations JS -->
	<script type="text/javascript" src="../js/formValidation.js"></script>
    <script type="text/javascript" src="../js/form_validation_bootstrap.js"></script>
	<!-- Form Vallidations JS End -->
    <script type="text/javascript" src="../js/super-treadmill.js"></script>
	<!-- javascript -->
    <script src="../js/main.js"></script>    
	<!--<script src="./js/libs/modernizr-2.6.2.min.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/gumby.min.js"></script>-->
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
