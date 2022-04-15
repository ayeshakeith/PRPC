<?php
    session_start();
?>
<html>
    <head>
        <title>Instructor Dashboard</title>

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

			
			
			<div class = "container-fluid body-container" style="display: inline-block;">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Announcement</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">
				<br><br><br>
				<!-- announcements content -->
				<div class="container-fluid scrollmenu" style="display:flex;">
					<!-- create box -->
					<div class="jumbotron" style="width:500px; height: 300px; border:5px solid #FCCB96; background-color:#EEEDFD; padding:20px;">
						<div class="container-fluid" style="display:flex;">
						<h2 style="color:#282626; text-align: left; margin-right:100px;">Create New Announcement</h2>
						<a href="class_addannouncement.php" style="background-color: #EEEDFD;"><button class="btn btn-default btn-sm" style="display: inline-block; height:35px; border-radius:5px;"> <span class="glyphicon glyphicon-plus"></span> </button></a>
						</div>
						<br>
						<p class="container-fluid"style="color:#130d4c; text-align: justify; font-size:16px;">As an instructor, you could publish announcements for your students to see.
						This will reflect on their side of the system. The date and time will be posted together with your name.</p>
						
					</div>

					<?php 
                        include('announcement_authentication.php');
                   	?>
					<div style="display:inline-block">
					<div class="list-group" style="height:300px; margin-left:50px; width:660px; overflow:scroll; -webkit-overflow-scrolling: touch;">
					<button type="submit" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
							<u><h4 class="mb-1"><input name="announcementtitle" value="<?php echo $row["announcement_title"]; ?>" style="border:0px; font-size:20px; width:100%; line-height: 35px;" readonly></h4></u>
							<p class="mb-1"><input name="announcementdescription" value="<?php echo $row["announcement_content"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" readonly></p>
							</div>
							<hr style="width: 100%;">
							<small style="float: right"> Posted On: <?php echo $row["date"]; ?></small>
							<br>
							<small style="float: right"> Posted By: <?php echo $row["course_instructor"]; ?></small>
                    </button>
					
					<?php 
                        include('announcement_authentication.php');
                        while($row = mysqli_fetch_assoc($result)) {
                    ?>

					<button type="submit" class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="d-flex w-100 justify-content-between">
							<u><h4 class="mb-1"><input name="announcementtitle" value="<?php echo $row["announcement_title"]; ?>" style="border:0px; font-size:20px; width:100%; line-height: 35px;" readonly></h4></u>
							<p class="mb-1"><input name="announcementdescription" value="<?php echo $row["announcement_content"]; ?>" style="border:0px; font-size:15px; width:100%; line-height: 35px;" readonly></p>
							</div>
							<hr style="width: 100%;">
							<small style="float: right"> Posted On: <?php echo $row["date"]; ?></small>
							<br>
							<small style="float: right"> Posted By: <?php echo $row["course_instructor"]; ?></small>
                    </button>
					

					<?php
						}
					?>

				</div>
					</div>

				</div>
			</div>


            

            <footer class="footer-container"> </footer>
    </body>
</html>
