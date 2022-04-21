<?php
    session_start();
?>
<html>
    <head>
        <title>Pending Works</title>

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
                margin-top: 20px;
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
                margin-top: 3%;
                text-align: center;
            }

            table {
                border-collapse: collapse;
                border-left: 50px solid white;
                border-right: 50px solid white;
            }

            th, td{
                text-align:center;
                border-bottom: 1px solid black !important;
            }

            td{
                font-size: 14px;
            }






        </style>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins; margin: 0; padding:0;">
            
    
            <?php include('student_navbar.php'); ?>
            
            <!-- Alternate Banner, Hello User is not connected in sidebar
                <div class="user-bar"> 
                <div class="row">
                    <div class="col-md-2" style="padding: 10px 50px; color: white; font-size: 18px;">
                        <img src="https://img.icons8.com/ios-glyphs/60/ffffff/user--v1.png" alt="logo" width="40px">
                        <span> Hello, User!</span>
                    </div>
                    <div class="col-md-10" style="text-align: center; color: white;">
                        <h3> SUBJECT NAME </h3>
                    </div>
                </div>
                </div> 
            -->

            <div class="content">
                    <div class="student-sidebar">
                        <!-- Hello, User is located in student_sidebar.php -->
                        <?php include('course_sidebar.php'); ?> 
                    </div>

                    <div class="banner-area">
                        <h1> <?php echo $_SESSION["coursecode"]; ?> </h1>
                    </div>
                    
                    <div class="content-area">
                        <div class="content-box">
                            <h2 class="align-center" style="color: #db9a53"> Pending Works </h2>
                            <hr style="border-top: 3px solid #fccb96; width: 15%">
                            <br>
                            <p style="color: gray; margin-left: 25px;"> Files </p>

                            <div class="table-responsive">
                                <table class="table">

                                <thead>
                                    <th>Activity Name</th>
                                    <th>File Attached</th>
                                    <th>Due Date</th>
                                    <th> </th>
                                </thead>
                                <tbody>

                                <tr>
                                    <td> Exercise 4 </td>
                                    <td> file4.txt </td>
                                    <td> April 18,2022 3:53am </td>
                                    <td> <button type="button" name="view" class="btn btn-warning" style="font-size: 12px;"> View </button> </td>
                                </tr>

                                <tr>
                                    <td> Exercise 5 </td>
                                    <td> file5.txt </td>
                                    <td> April 19,2022 4:53am </td>
                                    <td> <button type="button" name="view" class="btn btn-warning" style="font-size: 12px;">View</button> </td>
                                </tr>

                                <tr>
                                    <td> Exercise 6 </td>
                                    <td> file6.txt </td>
                                    <td> April 20,2022 5:53am </td>
                                    <td> <button type="button"name="view"  class="btn btn-warning" style="font-size: 12px;">View</button> </td>
                                </tr>
                
                                </tbody>
                            </table>
                            </div>

                        </div>
                    </div>
                
            </div>
    </body>
</html>