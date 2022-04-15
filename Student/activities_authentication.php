<?php      
    include('dbconnection.php');  

    $section = $_SESSION['section'];

    $id = $_SESSION['coursecode'];
      
    $query = "SELECT * from deliverable WHERE course_section = '$section' and course_name = '$id'";

    $result = mysqli_query($con, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
?>  