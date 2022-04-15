<?php
    session_start();
?>
<?php
    $_SESSION["classcode"] = $_POST["classname"];
    $_SESSION["classsec"] = $_POST["classsection"];

    ob_start();
    header("Location: class_announcement.php");
    ob_end_flush(); 
?>