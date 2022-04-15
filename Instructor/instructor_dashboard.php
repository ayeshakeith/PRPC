<?php
    session_start();
?>
<html>
    <head>
        <title>Instructor Dashboard</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <?php include('instructor_dashboard_style.php'); ?>
    </head>

    <body style="background-color:white; font-family: Poppins">
            <?php include('instructor_navbar.php'); ?>

            <div class="container1">
              <img src="../Instructor/img/instructor_dashboardheader.jpg" style="width:100%;">
              <div class="centered">
                <h2> Online Classes From Everywhere </h2> <br><br> 
                <a href="#weeklyschedule"><span class="glyphicon glyphicon-chevron-down"></span></a>
            </div>
            

            <div class="container" id="weeklyschedule" style="text-align: center; background-color:#fff9f5; margin-top:-20px; position: relative; z-index: 0px; width: 60%; padding:10rem;">
              <h1 class='heading'>Weekly Schedule</h1>
              <br><br><br>
              <p class="mb-0" style="color: black;">"Teaching is the greatest impact of optimism"</p>
              <footer style="color: black;" class="blockquote-footer">Colleen Wilcox</footer>
            </div>

            <br><br>

            <div class="container" style="text-align: center; color: black;">
                <ul class="nav nav-pills nav-justified">
                    <li class="active"><a data-toggle="pill" href="#bm1">BM1</a></li>
                    <li><a data-toggle="pill" href="#bm2">BM2</a></li>
                </ul>
                <br><br>
                <?php include('instructor_weeklyschedule.php'); ?>
            </div>

            <footer class="footer-container"> </footer>
    </body>
</html>