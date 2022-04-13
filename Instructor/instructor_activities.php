<?php
    session_start();
?>
<html>
    <head>
        <title>Student Dashboard</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
		
		<!--links for icon-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <?php include('instructor_activities_style.php'); ?>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins; overflow:hidden;">
            <?php include('instructor_navbar.php'); ?>
			<?php include('instructor_side-navbar.php'); ?>
			
			<div class = "container-fluid header-container">
				<p style="font-size:32px; color:white;">SUBJECT NAME | SECTION</p>
			</div>
			
			<div class = "container-fluid body-container">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Make an Announcement</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">
				<br>
				<div class="container-fluid" style="display:flex;">
				<div class="jumbotron" style="width:45%; height:55vh; border:5px solid #FCCB96; background-color:#EEEDFD; padding:20px;">
					<div class="container-fluid" style="display:flex;">
					  <h2 style="color:#282626;text-align: justify; padding-right:420px;">SUBJECT OF ANNOUNCEMENT</h2>
					  
						<i class="btn fa fa-pencil shesh"  role="button" ></i>
					</div>
					<br>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right">Date & Time</h2>
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right">Professor's Name</h2>
				</div>
				
				<div class="jumbotron" style="width:45%; height:55vh; border:5px solid #FCCB96; margin-left:7vw; background-color:#EEEDFD; padding:20px;">
					<div class="container-fluid" style="display:flex;">
					  <h2 style="color:#282626;text-align: justify; padding-right:420px; ">SUBJECT OF ANNOUNCEMENT</h2>
					  
						<i class="btn fa fa-pencil shesh" role="button" ></i>
					</div>
					<br>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:16px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
					eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right">Date & Time</h2>
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right">Professor's Name</h2>
				</div>
				</div>
			</div>
            

            <footer class="footer-container"> </footer>
    </body>
</html>
