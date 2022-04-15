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
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Upload an Activity</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">

				<br>
				<form class="form-horizontal" id="activity" action="addactivity_authentication.php" method="post">  <!--FORM-->

				  <br>
				  
				  
					<div class="container-fluid">
					<input placeholder="Activity Name" rows="9" id="actNo" name="activitytitle" style="font-size: 16px; color:black; padding:10px; width:30vw;"type="text" tabindex="1" 
								 value="" required autofocus>
					<input placeholder="Due Date" rows="9" id="activitydeadline" name="activitydeadline" style="font-size: 16px; color:black; padding:10px; width:30vw;"type="text" tabindex="1" 
							value="" required autofocus>
								 <br><br>
						<textarea class="form-control" rows="5" name="instruction" placeholder="Activity Instructions" required autofocus></textarea>
						<br>
						
					</div>

						

						<br><br><br>
					<center>
						<button type="submit" class="btn btn-default" style="width:8vw; background-color:#DB9A53; color: white;">Post</button>
							&nbsp;&nbsp;&nbsp;
					</center>
				</form>
			</div>
    </div>      

            <footer class="footer-container"> </footer>
    </body>
</html>
