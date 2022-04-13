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
				<p style="font-size:32px; color:white;">SUBJECT NAME | SECTION</p> <!--get yung subject&section name-->
			</div>
		
	<div class="container-fluid">		
			<div class = "container-fluid body-container">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Activity #</p> <!--get yung activity name from instructor_uploadActivity.php-->
				<hr style="border-top: 3px solid #fccb96; width: 15%">

				<br>
				
				
				<div class="container-fluid">
					<form class="form-horizontal" id="activity" action="#" method="post">
						<input type="file" id="myFile" name="myFile">
						<br>
						<p style="font-size:25px; color:#282626; text-align:justify;">FILE PREVIEW:</p><br>
						<p><iframe style="width:100%; height:30vh; overflow-y:scroll;"></iframe></p> <!--DITO LALABAS YUNG INUPLOAD NA FILE-->
						<p style="font-size:18px; color:#282626; text-align:justify;">name of document</p><!--GET NAME NG FILE-->
						
						<center>
							<button type="submit" class="btn btn-default" style="width:8vw; background-color:#DB9A53; color: white;">Attach <i class="fa fa-paperclip" style="font-size:20px"></i></button> <!--pagkasubmit balik sa instructor_uploadActivity.php-->
								&nbsp;&nbsp;&nbsp;
							<button type="button" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: white;">Cancel <i class="fa fa-close" style="font-size:20px"></i></button>
						</center>
					</form>
				</div>
				
			</div>
    </div>      

            <footer class="footer-container"> </footer>
    </body>
</html>
