<!--PHP Code-->
<?php
include('include/php/connection.php');
include('include/php/session.php');

$username = "";
$password = "";

$error="";
//$error = array();

if(isset($_POST['btn_adminLogin'])){

    $username = $_POST['username'];
    //$password = md5(($_POST['password']));
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        $error = "Empty Username or Password!";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Empty Username or Password!')
                    window.location.href='admin_login.php';
               </SCRIPT>");
    }else if(empty($email) && empty($password)){
        $error = "Fields are Mandatory";
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Empty username and password')
                    window.location.href='admin_login.php';
               </SCRIPT>");
    }else{
        $result = mysqli_query($conn, "SELECT * FROM admin_login WHERE username='$username' AND password='$password'");
        $numRows = mysqli_num_rows($result);
        
        if ($numRows > 0){
            while($row = mysqli_fetch_array($result)){

                $_SESSION['admin_login']=array(
                    'username'=>$row['username'],
                    'password'=>$row['password']);

                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Login Successful!')
                        window.location.href='admin_dashboard.php';
                    </SCRIPT>");
            }
        }else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Login Failed, wrong email or password')
                window.location.href='admin_login.php';
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
        <title>Admin Login</title>
        <!--Title ended-->

        <!--Link-->
        <!--<link rel="stylesheet" href="include/css/login.css">-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <!--Link ended-->
    </head>

    <body>
        <section id="Login">
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="POST">
                        <h2>
                            Admin Login
                        </h2>

                        <div class="inputbox">
                            <label for="username">Username</label>
                            <input type="text" id="username" name="username" required>
                        </div>

                        <div class="inputbox">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div class="forget">
                            <label for="forget">
                                <input type="checkbox">Remember Me
                                <a href="forgot_password.php">Forget Password</a>
                            </label>
                        </div>

                        <!--Login Button-->
                        <div>
                            <!--Admin Login-->
                            <button type="submit" class="btn_adminLogin btn btn-success btn-block btn-lg gradient-custom-4 text-body" value="Admin Login" name="btn_adminLogin" id="btn_adminLogin">
                                Admin Login
                            </button>
                            <!--Admin Login ended-->
                        </div>
                        <!--Login Button ended-->
                            
                        <!--Home Page Redirection-->
                        <div class="register">
                            <p>
                                <a href="/try/main_project/Homepage.php">Back to home page</a>
                            </p>
                        </div>
                        <!--Home Page Redirection end-->
                    </form>
                </div>
            </div>
        </section>
        
        <!--javascript-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <!--Javascript ended-->

    </body>

    <!--Footer-->
  <?php include('include/php/footer.php'); ?>
  <!--Footer end-->
</html>
<!--HTML Code end-->