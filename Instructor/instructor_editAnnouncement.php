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
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Make an Announcement</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">

				<br>
				<!--FORM-->
				<form class="form-horizontal" id="activity" action="instructor_announcementHandler.php" method="post"> 
				  <div class="form-group">
					
						<div class="col-sm-5" style="margin-left:23vw; text-align:center;">
						<input placeholder="Course" id="course" name="course" style="font-size: 14px; color:black; padding:10px; width:20vw;"type="text" tabindex="1" 
								 value="<?php if (isset($_POST['course'])) echo $_POST['course']; ?>" required autofocus> &nbsp;
						<input placeholder="Section"  id="section" name="section" style="font-size: 14px; color:black; padding:10px; width:10vw;"type="text" tabindex="1" 
								 value="<?php if (isset($_POST['section'])) echo $_POST['section']; ?>" required autofocus> 
								 <br><br>
						<input placeholder="Subject of Announcement" id="subject" name="subject" style="font-size: 14px; color:black; padding:10px; width:30vw;"type="text" tabindex="1" 
								 value="<?php if (isset($_POST['subject'])) echo $_POST['subject']; ?>" required autofocus>
						
						</div>
					
				  </div>
				  
				  <p style="font-size:20px; color:#282626; text-align:justify;">Announcement:</p><br>
				  
					<div class="container-fluid">
						<textarea class="form-control" rows="5" name="announcement"><?php if (isset($_POST['announcement'])) echo $_POST['announcement']; ?></textarea>
						<br>
					
					</div>
						<div class="col-sm-4" style="float:right;">
						
							<input placeholder="Date & Time" id="date" name="date" style="font-size: 16px; color:black; padding:3px; width:20vw;"type="text" tabindex="1" 
								 value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>" required autofocus>
							<input placeholder="Professor's Name" id="ProfName" name="ProfName" style="font-size: 16px; color:black; padding:3px; width:20vw;"type="text" tabindex="1" 
								 value="<?php if (isset($_POST['ProfName'])) echo $_POST['ProfName']; ?>" required autofocus> 
						</div>
						<br><br><br><br>
					<center>
						<div class="container-fluid" style="align:center;">
							<button type="submit" class="btn btn-default" style="width:8vw; background-color:#DB9A53; color: white;">Post</button>
								&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: white;"><a href="instructor_activities.php" style="color:white;">Cancel</a></button>
						</div>
					</center>
				</form>
			</div>
    </div>      

            <footer class="footer-container"> </footer>
    </body>
</html>
