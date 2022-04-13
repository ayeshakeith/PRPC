<?php      
    include('dbconnection.php');  
    
    $username = $_SESSION["user"];
    $password = $_SESSION["pass"]; 
    $section = $_SESSION['section'];
      
            $sql = "select * from deliverable where course_section = '$section'";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

            $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course1'";
            $resultdeliverable = mysqli_query($con, $sqldeliverable);  
            $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
            $countdeliverable = mysqli_num_rows($resultdeliverable);  
?>  