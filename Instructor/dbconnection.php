<?php

    $db_name = "prpc";
    $db_username = "root";
    $db_pass = "";
    $db_host = "localhost";

    $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_connect_error());

?>