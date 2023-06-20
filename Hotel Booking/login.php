<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="assets/img/LOGO BLACK.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<form action="index.php">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Admin Username"> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Password"> </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="Submit" name="adminlogin">Login</button>
								</div>
							</form>
							<!-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div> -->
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="social-login"> <span>Login with</span> <a href="https://www.facebook.com" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="https://www.google.com/account/about/" class="google"><i class="fab fa-google"></i></a> </div>
							<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div> <!--to registerpage-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>

<!--login-->
<?php
if(isset($_POST["adminlogin"]))
{
    $name=$_POST["admin_name"];
    $password=$_POST["admin_password"];

    $checkname=mysqli_query($connect,"SELECT * FROM admi WHERE admin_name='$name'");
    $resultname=mysqli_num_rows($checkname);

    $checkpassword=mysqli_query($connect,"SELECT * FROM admi WHERE admin_password='$password'");
    $resultpassword=mysqli_num_rows($checkpassword);



    if($resultname<=0 || $resultpassword<=0)
    {
        mysqli_query($connect,"INSERT INTO admi (admin_name,admin_password) VALUES ('$name','$password')");
        
    }
      ?>
        <script>
          alert("Login Sucessfully");
        </script>
      <?php

    // else
    // {
    //   ?>
    //     <script>
    //       alert("Invalid username or password");
    //     </script>
    //   <?php
    // }
    
    $check=mysqli_query($connect,"SELECT * FROM admi WHERE admin_name='$name'");
    $row=mysqli_fetch_assoc($check);
    $code=$row['admin_id'];
    header("refresh:0.5 url=uindex.php?reserve&code=$code");
}
?>