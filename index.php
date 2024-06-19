<!DOCTYPE html>
<html lang="en">
<head>
	<title>Guvi Login</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
    
	#exampleModalLabel {
  text-align: center;
  margin: auto;
}
.login100-form-title{
	overflow: hidden;
	white-space: nowrap;
	animation: typewriter;
	display: inline-block;
	position: relative;
	animation-duration: 10s;
	animation-timing-function: steps(25, end);
	animation-iteration-count: infinite;

	&::after {
		content: "|";
		position: absolute;
		right: 0;
		animation: caret infinite;
		animation-duration: 1s;
		animation-timing-function: steps(1, end);
	}
}
@keyframes typewriter {
	0%,
	100% {
		width: 0;
	}

	20%,
	80% {
		width: 11em;
	}
}

@keyframes caret {
	0%,
	100% {
		opacity: 0;
	}

	50% {
		opacity: 1;
	}
}
</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logo.svg" alt="IMG">
				</div>

				<form class="login100-form validate-form" id="loginform">
					<span class="login100-form-title">
						 WELCOME BACK!!!<img src="images/istockphoto-1008981914-612x612.jpg" style="width: 20px;">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" id="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="pass1"  placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="loginbutton" id="loginbutton">
							Login
						</button>
					</div>

					
					<div class="text-center p-t-136">
								<a class="txt2"  href="#" data-toggle="modal" data-target="#mod1">
                                <h6><span>Create account</span></h6>
									<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
								</a>
						</div>

				</form>
			</div>
		</div>
	</div>
	<div class="tab-pane p-20" id="messages" role="tabpanel">
				<div class="modal fade" id="mod1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" >Sign Up</h5>
                                </div>
                                <form id="cform">
                                    <div class="modal-body">

                                        <div id="errorMessage" class="alert alert-warning d-none"></div>

                                        <div class="mb-3">
                                                <label for="">Name *</label>
                                            <input type="text"  name="name" id="name" class="form-control" required/>
                                        </div>
										<div class="mb-3">
                                                <label for="">Email*</label>
                                            <input type="text" name="emailid" id="emailid" class="form-control" required/>
                                        </div>
										<div class="mb-3">
                                                <label for="">Date of Birth*</label>
                                            <input type="date"   name="dob" id="dob" class="form-control" required/>
                                        </div>

                                        <div class="mb-3">
                                                <label for="">Age*</label>
                                            <input type="number"  name="age" id="age" class="form-control" required/>
                                        </div>
										<div class="mb-3">
                                            <label for="gender">Gender*</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="">Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="None">None</option>
                                        </select>
                                    </div>  
										<div class="mb-3">
                                    				<label for="">Address *</label>
                                    				<textarea type="text" name="address" id="address" class="form-control" required ></textarea>
                               			 </div>
										<div class="mb-3">
                                                <label for="">contact no*</label>
                                            <input type="number" name="phone" id="phone" class="form-control" required/>
                                        </div> 
										<div class="mb-3">
                                                <label for="">PassWord*</label>
                                            	<input type="password"   name="pass" id="pass" class="form-control" required/>
                                        </div> 
										<div class="mb-3">
                                                <label for="">Confirm PassWord*</label>
                                            	<input type="password"  name="conpass" id="conpass" class="form-control" required/>
                                        </div>   

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" name="signupButton" id="signupButton"class=" cform btn btn-primary">CONFIRM</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
    </div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.24/sweetalert2.all.js"></script>
	<script>
$(document).ready(function() {
    $("#loginform").submit(function(e) {
        e.preventDefault();
        
        var email = $("#email").val();
        var password = $("#pass1").val();

        $.ajax({
            type: "POST",
            url: "login.php", // Update the path based on your directory structure
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                response = JSON.parse(response); // Parse the JSON response

                if (response.status === 200) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Login Successful'
                    }).then(function() {
                        window.location = "profile.php";
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Wrong credentials. Please try again.'
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred during login.'
                });
            }
        });
    });
});
$(document).on('submit', '#cform', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            type: "POST",
            url: "signup.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                var res = jQuery.parseJSON(response);
                if (res.status == 422) {
                    $('#errorMessage').removeClass('d-none');
                    $('#errorMessage').text(res.message);
                } else if (res.status == 200) {
                    // Here, you can echo the response status value
                    Swal.fire({
                    icon: 'success',
                    title: 'Done',
                    text: 'Account created'
                });
                    $('#cform')[0].reset();
                    $('#mod1').modal('hide');
                }
                else if (response.status == 500) {
                    alert(response.message);
                }
            }
        });
    });
</script>

	


<!--===============================================================================================-->	
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>