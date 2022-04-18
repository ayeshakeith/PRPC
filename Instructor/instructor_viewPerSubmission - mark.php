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
			
		<div class="container-fluid" style="display:flex;">
			<div class = "container-fluid body-container" style="width:80%">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Activity # Submissions</p> <!--get yung act name/number-->
				<hr style="border-top: 3px solid #fccb96; width: 15%">
				<br>
				<p style="font-size:22px; color:#282626; text-align:center;">STUDENT'S FILE PREVIEW:</p>
				<p><iframe style="width:100%; height:40vh; overflow-y:scroll;"></iframe></p> <!--DITO LALABAS YUNG INUPLOAD NA FILE-->
				
				<center>
				<button type="button" class="btn btn-default" style="width:18vw;  margin-top:1.2vh; background-color:#DB9A53; color: white;"><a href="https://www.onlinegdb.com/" target="_blank" style="color:white;">CHECK USING ONLINE COMPILER</a></button>
				</center>
				<!--LA PA LAMAN DAHIL SA DB LAMAN NITO??? -->
			</div>
			<div class = "container-fluid body1-container" style="width:30%">
				<p style="font-size:24px; color:#130d4c; text-align:center;">STUDENT'S INFORMATION</p> <!--get yung act name/number-->
				<hr style="border-top: 3px solid #130d4c; width: 15%">
				<br><br>
				<p style="font-size:18px; color:#130d4c; text-align:justify;">Name:</p> <!--name $--><br>
				<p style="font-size:18px; color:#130d4c; text-align:justify;">File Name:</p><br>
				<p style="font-size:18px; color:#130d4c; text-align:justify;">Date & Time of Submission:</p>
				<br>
				<form class="form-horizontal container-fluid">
				<div class="form-group" style="display:flex;">
					<p style="font-size:18px; color:#130d4c; text-align:justify;">Grade:
					<div class="col-sm-6">
						<input type="number_format" id="grade"class="form-control" placeholder="Input Grade">
					</div>
					 </p>
				  </div>
				  
					<center>
					<br><br><br><br><br><br>
						<p style="font-size:18px; color:#130d4c;">Submit Grade?</p>
							<button type="submit" class="btn btn-default" style="width:5vw; background-color:#DB9A53; color: white;">YES</button> <!--pagkasubmit balik sa instructor_uploadActivity.php-->
								&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-default" style="width:5vw; background-color:#130d4c; color: white;">NO</button>
					</center>
				 
				</form>
				<!--LA PA LAMAN DAHIL SA DB LAMAN NITO??? -->
			</div>
        </div>  

            <footer class="footer-container"> </footer>
    </body>
</html>
