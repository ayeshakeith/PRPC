<?php
    session_start();
?>
<html>
    <head>
        <title>My Announcements</title>

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
                text-align: center;
                color: white;
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

            .announcement-card{
                margin-top: 50px;
                border: 5px solid #fdd5ab;
                background-color: #eeedfd;
                margin-left: 65px;
                text-align: left;
                color: black;
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

                        <h2 class="align-center" style="color: #db9a53"> Announcements </h2>
                        <hr style="border-top: 3px solid #fccb96; width: 5%">
                            
                        <div class="list-group" style=" max-height: 490px; margin-bottom: 10px; overflow:scroll; -webkit-overflow-scrolling: touch;">

                        <?php 
                        include('announcement_authentication.php');
                        ?>
                        <form action="course_viewannouncement.php" method="POST">    
                        <button type="submit" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                            <u><h4 class="mb-1"><input name="announcementtitle" value="<?php echo $row["announcement_title"]; ?>" style="border:0px; font-size:20px; width:100%; line-height: 35px;" readonly></h4></u>
                            <p class="mb-1"><input name="announcementdescription" value="<?php echo $row["announcement_content"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" readonly></p>
                            </div>
                            <hr style="width: 100%;">
                            <small style="float: right"> Posted On: <?php echo $row["date"]; ?></small>
                            <br>
                            <small style="float: right"> Posted By: <?php echo $row["course_instructor"]; ?></small>
                            
                        </button>
                        </form>
                        <?php ?>

                        <?php 
                        include('announcement_authentication.php');
                        while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <form action="course_viewannouncement.php" method="POST">
                        <button type="submit" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                            <u><h4 class="mb-1"><input name="announcementtitle" value="<?php echo $row["announcement_title"]; ?>" style="border:0px; font-size:20px; width:100%; line-height: 32px;" readonly></h4></u>
                            <p class="mb-1"><input name="announcementdescription" value="<?php echo $row["announcement_content"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" readonly></p>
                            </div>
                            <hr style="width: 100%;">
                            <small style="float: right"> Posted On: <?php echo $row["date"]; ?></small>
                            <br>
                            <small style="float: right"> Posted By: <?php echo $row["course_instructor"]; ?></small>
                            
                        </button>
                        </form>
                        <?php } ?>

                        </div>

                        </div>
                    </div>
                
            </div>
    </body>
</html>