<?php
session_start();
?>

<?php      
    include('dbconnection.php');  

  $announcementid = $_POST['announcementid'];


              $sql = "DELETE FROM announcement WHERE announcement_id='$announcementid'";

              if (mysqli_query($con, $sql)) {
                  ob_start();
                  header("Location: class_announcement.php");
                  ob_end_flush();
                } else {
                  echo "Failed.";
                }
                
              mysqli_close($con);

            
          
        
?>  