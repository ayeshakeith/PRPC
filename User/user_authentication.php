<?php
    session_start();

    include('dbconnection.php');

    $user = $_SESSION["user"];
    $pass = $_SESSION["pass"];

    $query = "SELECT * from user_login WHERE username='$user' AND password = '$pass'";

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
                $_SESSION["section"] = $row["section"];
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