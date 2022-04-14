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

    <body style="background-color:#f1ece9; font-family: Poppins; margin: 0; padding:0;">
            
    
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

                            <h4> FILE PREVIEW </h4>

                            <?php
                                if (isset($_POST['submit'])){
                                    $file = $_FILES['actfile'];

                                    $fileName = $_FILES['actfile']['name'];
                                    $fileTmpName = $_FILES['actfile']['tmp_name']; 
                                    $fileSize = $_FILES['actfile']['size'];
                                    $fileError = $_FILES['actfile']['error'];
                                    $fileType = $_FILES['actfile']['type'];

                                    $fileExt = explode('.', $fileName);
                                    $fileActualExtension = strtolower(end($fileExt));
                                    $allowedExt = array('txt', 'cpp', 'pdf');

                                    if (in_array($fileActualExtension, $allowedExt)){
                                        if ($fileError === 0){
                                            
                                            print_r($file);

                                        } 
                                        else{
                                            echo "there was an error uploading your file!";
                                        }
                                    }
                                    else {
                                        echo "you cannot upload files of this type!";
                                    }
                                }
                            ?>

                            <?php 
                                
                                include('dbconnection.php');

                                        $sql = "select * from announcement where course_name = 'CS126L'";
                                        $result = mysqli_query($con, $sql);
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                        $count = mysqli_num_rows($result);

                            echo $row["announcement_content"];

                            ?> 

                        <iframe src = "<?php echo $_FILES['actfile']?>" title="W3Schools Free Online Web Tutorials" width="1100" height="300">
                        </iframe>

                        </div>
                    </div>
                
            </div>
    </body>
</html>