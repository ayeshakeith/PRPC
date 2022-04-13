<?php      
    include('dbconnection.php');  
    
    $username = $_SESSION["user"];
    $password = $_SESSION["pass"]; 
    $section = $_SESSION['section'];
      
            $sql = "select * from course where course_section = '$section'";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
?>  