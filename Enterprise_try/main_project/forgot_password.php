<!--PHP Code-->
<?php
include('include/php/connection.php');
include('include/php/session.php');

$email="";
$new_password="";
$r_password="";

if(isset($_POST['btn_resetPass'])){
	$email=$_POST['email'];
	$new_password=$_POST['new_password'];
	$r_password=$_POST['r_password'];

	if(empty($email) && empty($new_password) && empty($r_password)){
        array_push($error, "Please fill in the required field");
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill in the required field!')
			window.location.href='forgot_password.php';
			</SCRIPT>");
	}
	/*
	else if($new_password != $r_password){
		array_push($error, "The two passwords do not match");
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('The two passwords do not match')
			window.location.href='forgot_password.php';
			</SCRIPT>");
	}
	*/
	else{
		$email=$_POST['email'];
		$new_password=$_POST['new_password'];
		$r_password=$_POST['r_password'];

		$user_check_query = "SELECT * FROM user_login WHERE email='$email'";
        $result = mysqli_query($conn, $user_check_query);
        
        $user = mysqli_fetch_assoc($result);

		if ($user) { 
            if ($user['email'] === $email) {
				if($new_password === $r_password){
					$new_pass = md5($new_password);
					$sql = "UPDATE user_login SET password='$new_pass' WHERE email='$email'";
					if(mysqli_query($conn,$sql)){
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Password reset successfully!')
						window.location.href='user_login.php';
						</SCRIPT>");
					}else{
						echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Password reset failed!')
						window.location.href='forgot_password.php';
						</SCRIPT>");
					}//mysqli_close($conn);
				}else{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('The two passwords do not match')
					</SCRIPT>");
				}
			}else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Error occured, incorrect email')
					</SCRIPT>");
			}
			//if($user['email'] != $email{}
		}
	}
}mysqli_close($conn);
?>
<!--PHP Code end-->

<!--HTML Code-->
<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    
        <!--Title-->
        <title>Sports Club Management | Forgot Password</title>

        <!-- Stylesheets 
		<link rel="stylesheet" href="include/css/bootstrap.min.css">
	    <link rel="stylesheet" href="include/css/font-awesome.min.css"/>
	    <link rel="stylesheet" href="include/css/owl.carousel.min.css"/>
	    <link rel="stylesheet" href="include/css/nice-select.css"/>
	    <link rel="stylesheet" href="include/css/magnific-popup.css"/>
	    <link rel="stylesheet" href="include/css/slicknav.min.css"/>
	    <link rel="stylesheet" href="include/css/animate.css"/>
		-->
		
	    <!-- Main Stylesheets -->
		<link rel="stylesheet" href="include/css/style.css"/>
        <link rel="stylesheet" href="include/css/forgot_password.css"/>
    </head>
    
    <body>
    <div class="row">
		<h1>Forgot Password</h1>
		<form action="" method="POST">
		<div class="form-group">

		    <p><label for="email">Email</label></p>
			<input type="email" id="email" name="email"/>

			<!--<p><label for="user_id">User ID</label></p>-->
			<!--<input type="text" name="user_id" id="user_id" hidden/>-->

			<p><label for="new_password">New Password</label></p>
			<input type="password" id="new_password" name="new_password"/>

			<p><label for="r_password">Retype New Password</label></p>
			<input type="password" id="r_password" name="r_password"/>

			<button type="submit" id="btn_resetPass" name="btn_resetPass" class="btn_resetPass btn">
				Reset Password
            </button>

			<!--
			<button class="btn_resetPass" onclick="resetPassword()">Reset Password</button>
			<script type = "text/javascript">
			function resetPassword(){
				window.location = "reset_password.php";
			}
			</script>
			<button onclick="showSpinner()">Reset Password</button>
		    -->
		</div>
		
		<div class="footer">
			<h5>New here? 
				<a href="user_registration.php">Register for new account</a>
			</h5>
			<h5>Already have an account? 
				<a href="user_login.php">
					Login
				</a>
			</h5>
		</div>
		</form>
	</div>
    </body>

	<!-- Footer Section -->
    <?php include 'include/php/footer.php'; ?>
	<!-- Footer Section end -->
<html>
<!--HTML Code end-->