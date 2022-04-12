<?php
    session_start();

    include('dbconnection.php');

    $user = $_SESSION["user"];
    $pass = $_SESSION["pass"];

    $query = "SELECT * from login WHERE login_username='$user' AND login_password = '$pass'";

    $result = mysqli_query($con, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

        if($count == 1){  
            if($row["user_type"] == "Instructor")
            {
                ob_start();
                header("Location: ../Instructor/instructor_dashboard.php");
                ob_end_flush(); 
            }
            else{
                ob_start();
                header("Location: ../Student/student_dashboard.php");
                ob_end_flush(); 
            }
            
        }  
        else{  
            ob_start();
            header("Location: user_login.php");
            ob_end_flush(); 
        }
?>