<?php
    session_start();
    unset($_SESSION['coursecode']);
?>
<html>
    <head>
        <title>Student Dashboard</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <?php include('student_dashboard_style.php'); ?>
    </head>

    <body style="background-color:#fff9f5; font-family: Poppins">
            <?php include('student_navbar.php'); ?>

            <div class="container1">
              <img src="../Student/img/student_dashboardheader.jpg" style="width:100%;">
              <div class="centered">
                <h2> Online Classes From Everywhere </h2> <br><br> 
                <button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-play"></span> Play Video </button> </div>
            </div>

            
            <div class="grid-container">
                <div class="grid-item"><iframe style="width: 100%;" src="https://www.youtube.com/embed/BnxfuvRHKDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="grid-item"><iframe style="width: 100%;" src="https://www.youtube.com/embed/3B8g1RsZrlw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="grid-item"><iframe style="width: 100%;" src="https://www.youtube.com/embed/nyVOi3X53bk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="grid-item"><iframe style="width: 100%;" src="https://www.youtube.com/embed/lDeFSOUHdH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>

            <div class="container" style="text-align: center; background-color:white; margin-top:-20px; position: relative; z-index: 0px; width: 60%; padding:10rem;">
              <h1 class='heading'>Weekly Schedule</h1>
              <br><br><br>
              <p class="mb-0">"You don't get what you wish for. You get what you work for."</p>
              <footer class="blockquote-footer">Daniel Milstein</footer>
            </div>

            <br>

            <?php include('student_weeklyschedule.php'); ?>

            <br>

            <?php include('student_todolist.php'); ?>

            <footer class="footer-container"> </footer>
    </body>
</html>
