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
				
					<div class="container-fluid">
						<?php 
							$query = "SELECT * from announcement";

						?>
						<div class="row">
							<div class="col-md-8">
								<h3 style="color:#282626;text-align: left;"><?php echo $row['course_name']; ?></h3>
							</div>
							<div class="col-md-4">
								<h3 style="color:#282626;text-align: left;"><?php echo $row['course_section']; ?></h3>
							
							</div>
						</div>
					
						<div class="row">
							<div class="col-md-8">
								<h2 style="color:#282626;text-align: left;"><?php echo $row['announcement_title']; ?></h2>
							</div>
							<div class="col-md-4">
								<a href="instructor_editUpdate.php" style="margin-left:20vw;"><i class="btn fa fa-pencil shesh"  role="button" ></i></a>
							
							</div>
						</div>
					</div>
			
					<br>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:16px;"><?php echo $row['announcement_content']; ?></p>
					
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right"><?php echo $row['date'];  ?></h2>
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right"><?php echo $row['course_instructor'];  ?></h2>
				</div>
				
				<div class="jumbotron" style="width:45%; height:55vh; border:5px solid #FCCB96; margin-left:7vw; background-color:#EEEDFD; padding:20px;">
					<div class="container-fluid">
					
						<div class="row">
							<div class="col-md-8">
								<h2 style="color:#282626;text-align: left;"><?php echo $_POST["subject1"]; ?></h2>
							</div>
							<div class="col-md-4">
								<a href="instructor_editUpdate.php" style="margin-left:20vw;"><i class="btn fa fa-pencil shesh"  role="button" ></i></a>
							
							</div>
						</div>
					</div>
				
					<br>
					<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:16px;"><?php echo $_POST["announcement1"]; ?></p>
					
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right"><?php echo $_POST["date1"]; ?></h2>
					<h2 style="color:#282626;text-align: justify; font-size:18px; text-align: right"><?php echo $_POST["ProfName1"]; ?></h2>
				</div>
				</div>
			</div>
            

            <footer class="footer-container"> </footer>
    </body>
</html>