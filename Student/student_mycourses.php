<?php
    session_start();
?>
<html>
    <head>
        <title>My Courses</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>

            html{
                scroll-behavior: smooth;
            }

            .container-image{
                margin: 0;
                padding: 0;
                width: 100%;
            }

            .container-mycourses{
                margin: 0 auto;
                width: 21%;
                height: 11%;
                position: relative;
                text-align: center;
                background-color: #db9a53;
                border: 5px solid white;
                color: white;
                z-index: 1;
            }

            .container-courses{
                margin: 0 auto;
                margin-top:-60px;
                width: 80%;
                height: 150%;
            }
            
            .row-courses{
                margin: 0 auto;
                padding: 120px;
                height: 210vh;
                background-color: #fccb96;
            }

            .card{
                margin-bottom: 30px;
            }

            .card-image{
                padding: 0px;
                margin: 0px;
                left: 0;
                height: 190px;
                width: 100%;
            }

            .footer-container{
                background-color: #130d4c;
                margin-top: 30%;
                width: 100%;
                height: 5vh;
                color: white;

            }

        </style>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins">
            <?php include('student_navbar.php'); ?>

            <div class="container-image" id="home">
                <img src="https://gosaintjoseph.org/wp-content/uploads/2016/03/stj-header-books.jpg" alt="books" height="500px" width="100%">
            </div>

            <br><br><br><br>

            <div class="container-mycourses">
                <h1>My Courses</h1>
            </div>

            <br>

            <?php include('student_courselist.php'); ?>

        <footer class="footer-container"> </footer>
    </body>
</html>
