<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION["user"] = $username;
    $_SESSION["pass"] = $password;

    include('dbconnection.php');

    $query = "SELECT * from login WHERE login_username='$username' AND login_password = '$password'";

    $result = mysqli_query($con, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

        if($count == 1){  
            ob_start();
            header("Location: user_authentication.php");
            ob_end_flush(); 
        }  
        else{  
            ob_start();
            header("Location: user_login.php");
            ob_end_flush(); 
        }
?>