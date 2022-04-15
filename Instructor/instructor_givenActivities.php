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
		
	<div class="container-fluid">		
			<div class = "container-fluid body-container">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Given Activities</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">

				<br>
				
				<div class="container-fluid" style="display:flex; padding-left:3vw;">
				<div class="jumbotron" style="width:30%; height:55vh; border:2px solid #130d4c; background-color: #F6ebe4; padding:20px; overflow-y:scroll;">
					
					<div class="container-fluid">
					  <h2 style="color:#282626;text-align: center; margin-top:0.2vh;"><?php echo $_POST["actNo"]; ?></h2>
	
					</div>
					
					<br>
					<p style="font-size:22px; color:#282626; text-align:center;">INSTRUCTION:</p>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:15px;"><?php echo $_POST["instruction"]; ?></p>
					
					<center>
					
						<button type="submit" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: #F6ebe4;"><a href="instructor_editActivity.php" style="color:white;">EDIT </a></button> <!--pagkasubmit balik sa instructor_uploadActivity.php-->
									<br>
						<button type="button" class="btn btn-default" style="width:12vw;  margin-top:1.2vh; background-color:#130d4c; color: #F6ebe4;"><a href="instructor_submission.php" style="color:white;">VIEW SUBMISSIONS </a></button>
					</center>
				</div>
				
				<div class="jumbotron" style="width:30%; height:55vh; border:2px solid #130d4c; background-color: #F6ebe4; padding:20px; margin-left:2vw; overflow-y:scroll; overflow-x:hidden;">
					<div class="container-fluid">
					  <h2 style="color:#282626;text-align: center; margin-top:0.2vh;">ACTIVITY #</h2>
	
					</div>
					
					<br>
					<p style="font-size:22px; color:#282626; text-align:center;">INSTRUCTION:</p>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					
					<center>
					
						<button type="submit" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: #F6ebe4;"><a href="instructor_editActivity.php" style="color:white;">EDIT </a></button> <!--pagkasubmit balik sa instructor_uploadActivity.php-->
									<br>
						<button type="button" class="btn btn-default" style="width:12vw;  margin-top:1.2vh; background-color:#130d4c; color: #F6ebe4;"><a href="instructor_submission.php" style="color:white;">VIEW SUBMISSIONS</a></button>
					</center>
				</div>
				
				<div class="jumbotron" style="width:30%; height:55vh; border:2px solid #130d4c; background-color: #F6ebe4; padding:20px; margin-left:2vw; overflow-y:scroll; overflow-x:hidden;">
					<div class="container-fluid">
					  <h2 style="color:#282626;text-align: center; margin-top:0.2vh;">ACTIVITY #</h2>
	
					</div>
					
					<br>
					<p style="font-size:22px; color:#282626; text-align:center;">INSTRUCTION:</p>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					
					<center>
					
						<button type="submit" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: #F6ebe4;"><a href="instructor_editActivity.php" style="color:white;">EDIT </a></button> <!--pagkasubmit balik sa instructor_uploadActivity.php-->
									<br>
						<button type="button" class="btn btn-default" style="width:12vw;  margin-top:1.2vh; background-color:#130d4c; color: #F6ebe4;"><a href="instructor_submission.php" style="color:white;">VIEW SUBMISSIONS &nbsp;</a></button>
					</center>
				</div>
				</div>
			</div>
    </div>      

            <footer class="footer-container"> </footer>
    </body>
</html>
