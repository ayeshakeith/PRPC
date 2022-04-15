<?php      
    include('dbconnection.php');  
    
    $username = $_SESSION["user"];
    $password = $_SESSION["pass"]; 
    $section = $_SESSION['section'];

    $instructor = $_SESSION['name'];
      
            $sql = "select * from course where course_instructor = '$instructor' and (course_section = 'BM1' OR course_section = 'BM2')";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
?>  