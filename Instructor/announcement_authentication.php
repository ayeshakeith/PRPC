<?php      
    include('dbconnection.php');  

    $code = $_SESSION["classcode"];
    $section = $_SESSION["classsec"];
      
    $query = "SELECT * from announcement WHERE course_name = '$code' and course_section = '$section'";

    $result = mysqli_query($con, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
?>  