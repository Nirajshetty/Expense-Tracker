<?php
session_start();
include("connect.php");
if(isset($_POST['save']))
{
    $sal = $_POST['sal'];
	$savings = $_POST['savings'];
	$mailid=$_SESSION['user_name'];
    $qe="INSERT INTO setting (salary,targetsavings,mail) VALUES ('$sal','$savings','$mailid')";
    if(mysqli_query($success,$qe))
    {
    	header('location:index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SET</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<img src="img/etg.gif" alt="" height="50px" width="180px"
                                            style="margin-left: 50px; margin-top: 25px;">  
</head>
<body style="background: url(images/et.jpg) no-repeat ; background-size: 1600px 760px;">
	
	<div class="limiter" >
		<div class="container-login100" >
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);" >
					<span class="login100-form-title-1">
						SET
					</span>
				</div>

				<form class="login100-form validate-form" action="" method="post"  >
                    <br>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <br>
                        <br>
						<input class="input100" type="number" name="sal" placeholder="Enter Monthly salary">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					
						<input class="input100" type="number" name="savings" placeholder="Enter Target savings">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn" style="margin-left: 250px;">
						<button name="save" class="login100-form-btn">
							Save
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
