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
			
			<div class = "container-fluid body-container">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Student Submissions</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">
				<br>

				<table class="table table-hover" id="submissiontable">
				   <tr>
					<th onclick="sortTable(0)">Activity Name</th>
					<th>Student Name</th>
					<th onclick="sortTable(1)">File Name</th>
					<th>Date & Time of Submission</th>
					<th>Grade</th>
				  </tr>
				  </tr>
				  <?php include('submission_authentication.php');
				  ?>
				  <tr>
					  <td>
						  <?php 
							$refid = $row["deliverable_id"]; 

							include('dbconnection.php');

							$query = "SELECT * from deliverable WHERE deliverable_id = '$refid'";

							$result = mysqli_query($con, $query);  
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
							$count = mysqli_num_rows($result);  

							echo $row['deliverable_title'];
						  ?>
					  </td>
					  <td><?php include('submission_authentication.php'); echo $row['student_name']; ?></td>
					  <td><?php echo $row['submission_filename']; ?></td>
					  <td><?php echo $row['submission_date']; ?></td>
					  <td>
					  	<?php 
						  include('submission_authentication.php');
						  if($row['submission_grade'] == 0)
						  {
							  echo "N/A";
						  }
						  else echo $row['submission_grade'];
						?>
					  </td>
				  </tr>
				  <?php 
				  $refid = $row["deliverable_id"]; 

				  include('dbconnection.php');

				  $query = "SELECT * from deliverable WHERE deliverable_id = '$refid'";

				  $result = mysqli_query($con, $query);  
				  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
				  $count = mysqli_num_rows($result);  

				  $ref = $row['deliverable_title'];

				  include('submission_authentication.php');
				  while($row = mysqli_fetch_assoc($result)) {
				  ?>
				  <tr>
					  <td><?php echo $ref; ?></td>
					  <td><?php echo $row['student_name']; ?></td>
					  <td><?php echo $row['submission_filename']; ?></td>
					  <td><?php echo $row['submission_date']; ?></td>
					  <td>
					  	<?php 
						  if($row['submission_grade'] == 0)
						  {
							  echo "N/A";
						  }
						  else echo $row['submission_grade'];
						?>
					  </td>
				  </tr>
				  <?php
						}
				  ?>

				</table>
			</div>

			<?php include('submission_sort.php'); ?>
            

            <footer class="footer-container"> </footer>
    </body>
</html>
