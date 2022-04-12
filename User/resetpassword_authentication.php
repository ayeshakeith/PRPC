<?php
session_start();
?>

<?php      
    include('dbconnection.php');  
    
    $email = $_POST['email'];  
    $username = $_POST['username'];  
    
      
            $sql = "select * from login where login_email = '$email' and login_username = '$username'";
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  

            if($count == 1) {  
                $_SESSION['username'] = $username;
                
                ob_start();
                header("Location: user_resetpassword.php");
                ob_end_flush(); 
            }  

            else {  
                ob_start();
                header("Location: user_verifyaccount.php");
                ob_end_flush(); 
            }     
          
?>  