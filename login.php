<?php
session_start();
include("connect.php");
if(isset($_POST['login']))
{
	$_SESSION['user_name']=$_POST['email'];
	$e=$_POST['email'];
    $pswd = $_POST['pass'];
    $salted="456y45rghgfretghgdghfh".$pswd."hyytytdythjfyr7576t";
$hashed=hash('sha512',$salted);
    $query= "SELECT * FROM Credentials WHERE pwd='$hashed' && email='$e' ";
    $data=mysqli_query($success,$query);
    $total=mysqli_num_rows($data);
    if($total==1)
    {
        
        header('location:index.php');
    }
    else{
        echo '<script>alert("Invalid username or password")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
						Sign In
					</span>
				</div>

				<form class="login100-form validate-form" action="" method="post"  >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						
						<input class="input100" type="text" name="email" placeholder="Enter email-id">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
					
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="input100 login100-form validate-form" for="ckb1" style="color: #555555;"> 
								Don't have an account ? <br><a href="register.php" style="color: #57b846;">clickhere</a> to register
							</label>
						</div>

						<div>
							<a href="#" class="txt1" style="color: #57b846;">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn" style="margin-left: 250px;">
						<input type="submit" name="login" value="Login" class="login100-form-btn">
							
						
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
