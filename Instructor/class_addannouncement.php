<?php
    session_start();
?>
<html>
    <head>
        <title>Create Announcement</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
		
		<!--links for icon-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <?php include('class_announcement_style.php'); ?>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins; overflow:hidden;">
            <?php include('instructor_navbar.php'); ?>
			<?php include('class_sidebar.php'); ?>
			
		
			<div class = "container-fluid header-container">
				<p style="font-size:32px; color:white;"><?php echo $_SESSION["classcode"] . " - " . $_SESSION["classsec"] ?></p>
			</div>
		
	<div class="container-fluid">		
			<div class = "container-fluid body-container">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Create Announcement</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">

				<br><br><br>
				<!--FORM-->
				<form class="form-horizontal" id="activity" action="addannouncement_authentication.php" method="post"> 
				  
					<div class="container-fluid">
					<input placeholder="Subject of Announcement" id="subject" name="subject" style="font-size: 14px; color:black; padding:10px; width:30vw;"type="text" tabindex="1" 
								 value="" required autofocus> <br><br>
						<textarea class="form-control" rows="5" name="content" placeholder="Announcement Content"><?php if (isset($_POST['announcement'])) echo $_POST['announcement']; ?></textarea>
						<br>
					
					</div>

						<div class="container-fluid" style="text-align:center; margin-top:50px;">
							<button type="submit" class="btn btn-default" style="width:8vw; background-color:#DB9A53; color: white;">Post</button>
								&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: white;"><a href="instructor_activities.php" style="color:white;">Cancel</a></button>
						</div>
					
				</form>
			</div>
    </div>      

            <footer class="footer-container"> </footer>
    </body>
</html>
