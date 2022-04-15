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
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Upload an Activity</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">

				<br>
				<form class="form-horizontal" id="activity" action="instructor_givenActivities.php" method="post">  <!--FORM-->
				  <div class="form-group">
					
						<div class="col-sm-5" style="margin-left:23vw; text-align:center;">
						
						<input placeholder="Activity Name/Number" rows="9" id="actNo" name="actNo" style="font-size: 16px; color:black; padding:10px; width:30vw;"type="text" tabindex="1" 
								 value="<?php if (isset($_POST['actNo'])) echo $_POST['actNo']; ?>" required autofocus>
						
						</div>
					
				  </div>
				  <br>
				  <p style="font-size:25px; color:#282626; text-align:justify;">INSTRUCTION/S:</p><br>
				  
					<div class="container-fluid">
						<textarea class="form-control" rows="9" name="instruction" required autofocus><?php if (isset($_POST['instruction'])) echo $_POST['instruction']; ?></textarea>
						<br>
					
					</div>
						<center>
						<button type="button" class="btn btn-default" style="width:10vw; background-color:white; color: #130d4c;"><a href="instructor_attach.php" style="color:#130d4c;"> <i class="fa fa-upload" style="font-size:23px; color:#130d4c;"></i> &nbsp;Attach a File</a></button>
						</center>
						<br>
					<center>
						<button type="submit" class="btn btn-default" style="width:8vw; background-color:#DB9A53; color: white;">Post</button>
							&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: white;">Cancel</button>
					</center>
				</form>
			</div>
    </div>      

            <footer class="footer-container"> </footer>
    </body>
</html>
