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

			
			<form class="form-horizontal" id="announcement" action="deleteannouncement_authentication.php" method="post"> 
			<div class = "container-fluid body-container" style="display: inline-block; color:black;">

                            <br>
                            <h2 style="text-align: center"><?php echo $_POST["announcementtitle"]; ?></h2>

                            <hr style="width: 80%;">

                            <br><br>

                            <p style="text-align:justify; margin-right:50px; margin-left:50px;">
                            <?php echo $_POST["announcementdescription"]; ?>
                            </p>

                            <input name="announcementid" value="<?php echo $_POST["aid"]; ?>" style="border:0px; font-size:0px; width:0%; line-height: 0px;" hidden>

                            <br>

                        <div class="container-fluid" style="text-align:center; margin-top:50px;">
							    <button type="submit" class="btn btn-default" style="width:8vw; background-color:#DB9A53; color: white;">Delete</button>
								&nbsp;&nbsp;&nbsp;
								<a href="class_announcement.php" style="color:white;"><button type="button" class="btn btn-default" style="width:8vw; background-color:#130d4c; color: white;">Back</button></a>
						</div>
			</div>
			</form>



            

            <footer class="footer-container"> </footer>
    </body>
</html>
