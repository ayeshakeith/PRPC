<?php
    session_start();

    $usertype = $_SESSION['usertype'];
    $type = "";

    include('dbconnection.php');

    $query = "SELECT * from login WHERE login_username='$usertype'";

    $result = mysqli_query($con, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

            while($row = mysqli_fetch_assoc($result)) {
                $type = $row["user_type"];

                if($type == "Instructor")
                {
                    ob_start();
                    header("Location: instructor_dashboard.php");
                    ob_end_flush();
                }

                if($type == "Student")
                {
                    ob_start();
                    header("Location: student_dashboard.php");
                    ob_end_flush();
                }
            }
  

?>