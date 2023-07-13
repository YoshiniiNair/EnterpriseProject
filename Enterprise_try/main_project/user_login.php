<!--PHP Code-->
<?php
include('include/php/connection.php');
include('include/php/session.php');

$email = "";
$password = "";

$error="";
//$error = array();

if(isset($_POST['btn_usersLogin'])){

    $email = $_POST['email'];
    $password = md5(($_POST['password']));
    //$password = $_POST['password'];

    if(empty($email) || empty($password)){
        $error = "Empty Email or Password!";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Empty Email or Password!')
                    window.location.href='user_login.php';
               </SCRIPT>");
    }else if(empty($email) && empty($password)){
        $error = "Fields are Mandatory";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Empty email and password')
                    window.location.href='user_login.php';
               </SCRIPT>");
    }else{
        $result = mysqli_query($conn, "SELECT * FROM user_login WHERE email='$email' AND password='$password'");
        $numRows = mysqli_num_rows($result);
        
        if ($numRows > 0){
            while($row = mysqli_fetch_array($result)){

                $_SESSION['user_login']=array(
                    'email'=>$row['email'],
                    'password'=>$row['password']);

                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Login Successful!')
                        window.location.href='Homepage.php';
                    </SCRIPT>");
            }
        }else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Login Failed, wrong email or password')
                window.location.href='user_login.php';
            </SCRIPT>");
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
        <title>Sports Club Management | User Sign In</title>
        <!--Title ended-->

        <!--Link-->
        <link rel="stylesheet" href="include/css/login.css" type="text/css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <!--Link ended-->
    </head>

    <body>
        <section id="Login">
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="POST">
                        <h2>
                            Sports Club Management Sign In
                        </h2>
                        
                        <div class="inputbox">
                            <!--<ion-icon name="mail-outline"></ion-icon>-->
                            <!--<input type="email" id="email" name="email" placeholder="Enter your email here" required>-->
                            <input type="email" id="email" name="email" required>
                            <label for="email">Email</label>
                        </div>

                        <!--
                        <div class="inputbox">
                            //<ion-icon name="mail-outline"></ion-icon>
                            //<input type="username" id="username" name="username" placeholder="Enter your username here" required>
                            <input type="text" id="username" name="username" required>
                            <label for="">Username</label>
                        </div>
                        -->

                        <div class="inputbox">
                            <!--<ion-icon name="lock-closed-outline"></ion-icon>-->
                            <!--<input type="password" id="password" name="password" placeholder="Enter your password here" required>-->
                            <input type="password" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="forget">
                            <label for="forget">
                                <input type="checkbox">Remember Me
                                <a href="forgot_password.php">Forget Password</a>
                            </label>
                        </div>

                        <!--Login Button-->
                        <div>
                            <!--User Login-->
                            <button type="submit" class="btn_usersLogin btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="User Login" name="btn_usersLogin" id="btn_usersLogin">
                                User Login
                            </button>
                            <!--User Login ended-->

                            <!--Admin Login
                            <div class="register">
                            <p>
                                Admin
                                <a href="admin/admin_login.php">Login</a>
                            </p>
                            </div>
                            Admin Login ended-->
                        </div>
                        <!--Login Button ended-->
                            
                        <div class="register">
                            <p>
                                Don't have a account?
                                <a href="user_registration.php">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <!--javascript-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!--Javascript ended-->

    </body>

    <!-- Footer Section -->
    <?php include 'include/php/footer.php'; ?>
	<!-- Footer Section end -->
</html>
<!--HTML Code end-->