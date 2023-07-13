<?php
include('include/php/connection.php');
include('include/php/session.php');

if(isset($_POST['btn_submit'])){
    /*
    $sql = "SELECT * FROM membership where id='{$_GET['id']}'";
    $result = $conn->query($sql);

    $sql = "INSERT INTO member_application(id, user_id, app_status) VALUES(
        SELECT * FROM user_login WHERE email='$email'
        JOIN member_application ON user_login.user_id = member_application.user_id
        )";
    */

    $id = $_GET['id'];
    $sql = "SELECT id, name, price, status FROM membership WHERE id LIKE '%$id%'";

    if(mysqli_query($conn, $sql)){
        $username = $_SESSION['user_login']['email'];
        $user_id = $_GET['user_id'];

        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $sql2 = "SELECT user_id, name, email FROM user_login WHERE user_id LIKE '%$user_id%'";

        if(mysqli_query($conn, $sql2)){
            $sql3 = "INSERT INTO member_application(id, user_id, app_status) VALUES('$id', '$user_id', 'Pending')";

            if(mysqli_query($conn, $sql3)){
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Apply successful!')
                window.location.href='Profile.php';
                </SCRIPT>");
            }else{
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Could not apply, please try it again.')
                window.history.go(-1);
                </SCRIPT>");
            }
        }else{
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Could not get user id successfully. Please try again.')
            window.history.go(-1);
            </SCRIPT>");
        }
    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Could not get id, please try it again.')
        window.history.go(-1);
        </SCRIPT>");
    }
}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Could not subitted successfully. Please try again.')
    window.history.go(-1);
    </SCRIPT>");
}mysqli_close($conn);
?>