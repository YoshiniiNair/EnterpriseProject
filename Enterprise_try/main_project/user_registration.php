<!--PHP Code-->
<?php
include('include/php/connection.php');
include('include/php/session.php');

$username = "";
$email = "";
$password1 = "";
$password2 = "";

$error = array();

if(isset($_POST['btn_register'])){
     
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];
    $password2 = $_POST['cPassword'];

    //original
    if(empty($username) || empty($email) || empty($password1) || empty($password2)){
        array_push($error, "Please fill in the required field");
        echo "<script type='text/javascript'>";
        echo "alert('Please fill in the required field!')";
        echo "</script>";
    }else if(empty($email) && empty($password1)){
        array_push($error, "Fields are Mandatory");
        echo "<script type='text/javascript'>";
        echo "alert('Fields are Mandatory')";
        echo "</script>";
    }else if($password1 != $password2){
        array_push($error, "The two passwords do not match");
        echo "<script type='text/javascript'>";
        echo "alert('The two passwords do not match')";
        echo "</script>";
    }else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password1 = $_POST['password'];
        $password2 = $_POST['cPassword'];

        $user_check_query = "SELECT * FROM user_login WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($conn, $user_check_query);
        
        $user = mysqli_fetch_assoc($result);
        
        if ($user) { 
            if ($user['username'] === $username) {
                $error = "Username already existed";
            }
            if ($user['email'] === $email) {
                $error = "Email already existed";
            }
        }
        
        if (count($error) == 0) {
            
            $password1 = md5($password1);
            //$password1 = password_hash($password1, PASSWORD_DEFAULT);
            
            $query = "INSERT INTO user_login(username, email, password) VALUES('$username', '$email', '$password1')";
            //$query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password1')";
            mysqli_query($conn, $query);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Succesfully Registered!')
                    window.location.href='login.php';
                    </SCRIPT>");
        }else{
            echo "<script type='text/javascript'>";
            echo "alert('Registered Failed!')";
            echo "</script>";
        }
    }
}
?>
<!--PHP Code end-->

<!--HTML Code-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Title-->
        <title>Clubify Admin Site - Register for New Account</title>
        <!--Title ended-->

        <!--Link-->
        <link rel="stylesheet" href="include/css/user-registration.css" type="text/css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <!--Link ended-->
    </head>

    <body>
        <section id="Registration" class="vh-100 bg-image">
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="POST">
                        <h2>
                            Sign Up for New Account
                        </h2>

                        <!--content-->
                        <div class="inputbox form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" required/>
                            <label for="username" class="form-label">
                                Your Username
                            </label>
                        </div>

                        <div class="inputbox form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                            <label for="email" class="form-label">
                                Your Email
                            </label>
                        </div>

                        <div class="inputbox form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                            <label for="password" class="form-label">
                                Your Password
                            </label>
                        </div>
                        
                        <div class="inputbox form-outline mb-4">
                            <input type="password" id="cPassword" name="cPassword" class="form-control form-control-lg" required/>
                            <label for="cPassword" class="form-label">
                                Confirm Password
                            </label>
                        </div>

                        <div class="terms form-check d-flex justify-content-center mb-5">
                            <!--original code
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label" for="terms"> //for="form2Example3g"
                                I agree all statements in 
                                <a href="#!" class="text-body">
                                    <u>
                                        Terms of service
                                    </u>
                                </a>
                            </label>
                            -->
                            
                            <label class="form-check-label" for="terms"><!--for="form2Example3g"-->
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                I agree all statements in 
                                <a href="#!" class="text-body">
                                    <u>
                                        Terms of service
                                    </u>
                                </a>
                            </label>
                        </div>
                        <!--content ended-->
                        
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn_register btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Register" name="btn_register" id="btn_register">
                                Register
                            </button>
                        </div>
                        
                        <!--buttons ended-->
                            
                        <div class="login">
                            <p class="text-center text-muted mt-5 mb-0">
                                Have already an account? 
                                <a href="user_login.php" class="fw-bold text-body">
                                    <u>
                                        Login here
                                    </u>
                                </a>
                            </p>
                        </div>

                    </form>
                </div>
            </div>
        </section>

        <!--Javascripts-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!--Javascript ended-->
    </body>

    <!-- Footer Section -->
    <?php include 'include/php/footer.php'; ?>
	<!-- Footer Section end -->
</html>
<!--HTML Code end-->