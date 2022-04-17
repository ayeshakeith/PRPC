<?php
    session_start();
    unset($_SESSION['activitytitle']);
    unset($_SESSION['activitydescription']);
    unset($_SESSION['did']);
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
                margin-top: 3%;
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

    <body style="background-color:#f1ece9; font-family: Poppins; margin: 0; padding:0;">
            
    
            <?php include('student_navbar.php'); ?>

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
                        
                        <h2 class="align-center" style="color: #db9a53"> Activities </h2>
                        <hr style="border-top: 3px solid #fccb96; width: 5%">
                            
                        <div class="list-group" style=" max-height: 490px; margin-bottom: 10px; overflow:scroll; -webkit-overflow-scrolling: touch;">

                        <?php 
                        include('activities_authentication.php');
                        
                        ?>
                        <form action="course_viewactivity.php" method="POST">    
                        <button type="submit" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                            <u><h4 class="mb-1"><input name="activitytitle" value="<?php echo $row["deliverable_title"]; ?>" style="border:0px; font-size:20px; width:100%; line-height: 35px;" readonly></h4></u>
                            <small> Deadline: <?php echo $row["deliverable_duedate"]; ?></small>
                            </div>
                            <hr style="width: 100%;">
                            <p class="mb-1"><input name="activitydescription" value="<?php echo $row["deliverable_description"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" readonly></p>
                            <input name="did" value="<?php echo $row["deliverable_id"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" hidden>
                        </button>
                        </form>
                        <?php ?>

                        <?php 
                        include('activities_authentication.php');
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="course_viewactivity.php" method="POST">
                        <button type="submit" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                            <u><h4 class="mb-1"><input name="activitytitle" value="<?php echo $row["deliverable_title"]; ?>" style="border:0px; font-size:20px; width:100%; line-height: 32px;" readonly></h4></u>
                            <small> Deadline: <?php echo $row["deliverable_duedate"]; ?></small>
                            </div>
                            <hr style="width: 100%;">
                            <p class="mb-1"><input name="activitydescription" value="<?php echo $row["deliverable_description"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" readonly></p>
                            <input name="did" value="<?php echo $row["deliverable_id"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" hidden>
                            
                        </button>
                        </form>
                        <?php } ?>

                        </div>

                        </div>
                    </div>
                
            </div>
    </body>
</html>