<?php
include('include/php/connection.php');
include('include/php/session.php');

// Code for changeing password 
//$user_id="";
$email="";
$curr_password="";
$new_password="";
$confirm_password="";

if(isset($_POST['btn_changePass'])){
    //$user_id=$_SESSION['user_login']['user_id'];
    $email=$_SESSION['user_login']['email'];
	$curr_password=$_POST['curr_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];

	if(empty($curr_password) && empty($new_password) && empty($confirm_password)){
        //array_push($error, "Please fill in the required field");
		echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Please fill in the required field!')
			window.location.href='change_password.php';
			</SCRIPT>");
	}else{
        //$user_id=$_SESSION['user_login']['user_id'];
        $email=$_SESSION['user_login']['email'];
		$curr_password=$_POST['curr_password'];
		$new_password=$_POST['new_password'];
		$confirm_password=$_POST['confirm_password'];

        //$user_check_query = "SELECT * FROM user_login WHERE user_id='$user_id'";
		$user_check_query = "SELECT * FROM user_login WHERE email='$email'";
        $result = mysqli_query($conn, $user_check_query);
        
        $user = mysqli_fetch_assoc($result);

		if ($user){ 
            //if ($user['user_id'] === $user_id){
            if ($user['email'] === $email){
                if ($user['password'] === md5($curr_password)){
                    if($curr_password !== $new_password){
                        if($new_password === $confirm_password){
                            $new_pass = md5($new_password);
                            //$sql = "UPDATE user_login SET password='$new_pass' WHERE user_id='$user_id'";
                            $sql = "UPDATE user_login SET password='$new_pass' WHERE email='$email'";
                            if(mysqli_query($conn,$sql)){
                                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                window.alert('Password reset successfully!')
                                window.location.href='change_password.php';
                                </SCRIPT>");
                            }else{
                                echo ("<SCRIPT LANGUAGE='JavaScript'>
                                window.alert('Password reset failed!')
                                window.location.href='change_password.php';
                                </SCRIPT>");
                            }
                        }else{
                            echo ("<SCRIPT LANGUAGE='JavaScript'>
                                window.alert('New password and retype password not matching.')
                                window.location.href='change_password.php';
                                </SCRIPT>");
                        }
                    }else{
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                            window.alert('New password not allowed to be the same with current password.')
                            window.location.href='change_password.php';
                            </SCRIPT>");
                    }
                }else{
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Incorrect current password.')
                        window.location.href='change_password.php';
                        </SCRIPT>");
                }
			}else{
				echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Error occured, incorrect email')
					</SCRIPT>");
			}
		}
	}
}mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <link rel="stylesheet" href="include/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--<link rel="stylesheet" href="include/css/forgot_password.css"/>-->
  
  <title>Sports Management Business | Change Password</title>
        
</head>

<body>
    <!-- Header Section -->
	<?php include('include/php/header.php');?>
	<!-- Header Section end -->

    <!--Content-->
    <div class="row">
        <form name="frmChange" action="" method="POST">
<!--
    onSubmit="return validatePassword()"
            <script>
                function validatePassword() {
	var curr_password, new_password, confirm_password, output = true;

	curr_password = document.frmChange.curr_password;
	new_password = document.frmChange.new_password;
	confirm_password = document.frmChange.confirm_password;

	if (!curr_password.value) {
		curr_password.focus();
		document.getElementById("curr_password").innerHTML = "required";
		output = false;
	}
	else if (!new_password) {
		new_password.focus();
		document.getElementById("new_password").innerHTML = "required";
		output = false;
	}
	else if (!confirm_password.value) {
		confirm_password.focus();
		document.getElementById("confirm_password").innerHTML = "required";
		output = false;
	}
	if (new_password.value != confirm_password.value) {
		new_password.value = "";
		confirm_password.value = "";
		new_password.focus();
		document.getElementById("confirm_password").innerHTML = "not same";
		output = false;
	}
	return output;
}
            </script>

            <div class="validation-message text-center"><?php if(isset($message)) { echo $message; } ?></div>
        -->
            <h2 class="text-center">Change Password</h2>
            <h6 class="information-text text-center">Enter your registered email to reset your password.</h6>
            <div class="form-group text-center">

			<!--<p><label for="user_id">User ID</label></p>-->
			<!--<input type="text" name="user_id" id="user_id" hidden/>-->

            <p><label for="curr_password">Current Password</label></p>
			<input type="password" id="curr_password" name="curr_password"/>

			<p><label for="new_password">New Password</label></p>
			<input type="password" id="new_password" name="new_password"/>

			<p><label for="confirm_password">Confirm Password</label></p>
			<input type="password" id="confirm_password" name="confirm_password"/>
            
            <br>

			<button type="submit" id="btn_changePass" name="btn_changePass" class="btn_changePass btn">
				Change Password
            </button>

            </div>
        </form>
    </div>
    <!--Content end-->
    
    <!-- Footer Section -->
	<?php include('include/php/footer.php');?>
	<!-- Footer Section end -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>