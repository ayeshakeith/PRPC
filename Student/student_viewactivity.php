<?php
    session_start();
?>
<html>
    <head>
        <title>My Activities</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>

            * {
                scroll-behavior: smooth;
            }

            html{
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }

            .sidebar {
                position: sticky;
                top: 0px;
                left: 0px;
                width: 243px; 
                height: 100vh;
                background-color: #130d4c;
                overflow: hidden;
                margin-top: 50px;
            }

            .sidebar .wrapper {
                width: 250px;
                height: 100%;
            }

            .sidebar .logo {
                padding: 20px 10px;
                background: #0e0a37;
                margin-bottom: 20px;
                color: white;
                font-size: 15px;
            }

            .sidebar .logo img{
                width: 50px;
                text-align: center;
            }

            .sidebar .links {
                padding: 0px 5px;
            }

            .sidebar .links .link {
                margin: 8px 0px;
                height: 50px;
                color: white;
                display: flex;
                align-items: center;
                padding: 20px 12px;
                transition: all 200ms ease-in-out;
            }

            .sidebar .links .link img{
                display: inline-block;
                width: 22px;
                height: 22px;
            }

            .sidebar .links .link span {
                display: inline-block;
                font-size: 17px;
                margin-left: 20px;
            }

            .sidebar .links .link:hover {
                background-color: #f1ece9;
                color: #130d4c;
                cursor: pointer;
            }

            .student-sidebar{
                margin-top: -50px;
                float: left;
            }

            .user-bar{
                background-color:#130d4c;
                width: 100%;
                height: 60px;
                margin-top: 50px;
            }
            
            .content{
                background-color: #f1ece9;
                top:0px;
                right:0px;
                bottom:0px;
                left:0px;
                height: 100vh;
            }
            
            .banner-area{
                margin-top: 50px;
                padding-top: 10px;
                padding-bottom: 10px;
                background-color: #0e0a37;
                text-align: center;
                color: white;
            }

            .content-area{
                background-color: #f1ece9;
                margin-top:16px;
                margin-left:260px;
                margin-right: 15px;
                height: 50vh;  
                color: black;
                vertical-align: top;
            }
            
            .content-box{
                background-color: white;
                margin: 0 auto;
                margin-top: 1%;
                width: 100%;
                border: 3px solid black;
                vertical-align: top;
                height: 83vh;
            }

            .align-center{
                margin-top: 10%;
                text-align: center;
            }

            input[type=submit] {
                width: 10%;
                background-color: white;
                color: black;
                border: 2px solid #130d4c;
                padding: 14px 20px;
                border-radius: 30px;
                cursor: pointer;
            }

        </style>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins; margin: 0; pading:0;">
            
    
            <?php include('student_navbar.php'); ?>

            <div class="content">
                    <div class="student-sidebar">
                        <!-- Hello, User is located in student_sidebar.php -->
                        <?php include('student_sidebar.php'); ?> 
                    </div>

                    <div class="banner-area">
                        <h1> SUBJECT NAME </h1>
                    </div>
                    
                    <div class="content-area">
                        <div class="content-box">
                            <br>
                            <h2 style="text-align: center"> Activity # </h2>

                            <br>

                            <p style=" margin-left: 25px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                            <p style=" margin-left: 25px;"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>

                            <br>

                            <!-- this is where to call the submitted file of the teacher -->
                            <span style=" margin-left: 25px; color: gray"> Attached Files: </span> <a href="#"> file.pdf </a>
                            
                            <br>

                            <p style="margin-top: 50px; margin-left: 25px; color: gray">Click on the "Choose File" button to upload a file:</p>

                            <form action="student_previewactivity.php" method="post" enctype="multipart/form-data">
                            <input type="file" id="actfile" name="actfile" style=" margin-left: 25px;">
                            <div class="align-center"> <input type="submit" name="submit" value="Submit File"> </div>
                            </form>

                        </div>
                    </div>
                
            </div>
    </body>
</html>