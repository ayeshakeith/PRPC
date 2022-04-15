<?php
    session_start();
?>
<?php
    $_SESSION["coursecode"] = $_POST["coursename"];
    ob_start();
    header("Location: course_announcement.php");
    ob_end_flush(); 
?>