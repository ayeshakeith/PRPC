<?php      
    include('dbconnection.php');  

    $code = $_SESSION["classcode"];
    $section = $_SESSION["classsec"];
    $_SESSION['test'] = $_POST['gradeid'];

    $filesubmission = $_SESSION['test'];
      
    $query = "SELECT * from submissions WHERE course_name = '$code' and student_section = '$section' and submission_filename = '$filesubmission'";

    $result = mysqli_query($con, $query);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
?>  