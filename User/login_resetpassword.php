<?php
session_start();
?>

<?php      
    include('dbconnection.php');  
    
    $password = $_POST['password1'];  
    $confirmpassword = $_POST['password2'];  

    $username = $_SESSION['username'];


    if($password == $confirmpassword)
    {
        $sql = "UPDATE login SET login_password='$confirmpassword' WHERE login_username='$username'";

        if (mysqli_query($con, $sql)) {
            ob_start();
            header("Location: user_login.php");
            ob_end_flush();
          } else {
            ob_start();
            header("Location: user_verifyaccount.php");
            ob_end_flush();
          }
          
        mysqli_close($con);

    }

    else
    {
        ob_start();
        header("Location: user_resetpassword.php");
        ob_end_flush();
    }

            
          
        
?>  