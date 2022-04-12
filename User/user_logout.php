<?php
session_unset();

session_destroy();

            ob_start();
            header("Location: ../User/user_login.php");
            ob_end_flush(); 
?>