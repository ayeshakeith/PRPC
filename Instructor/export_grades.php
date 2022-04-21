<?php
    session_start();

	unset($_SESSION['test']);
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
		<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins; overflow:hidden;">
            <?php include('instructor_navbar.php'); ?>
			<?php include('class_sidebar.php'); ?>
			
			<div class = "container-fluid header-container">
				<p style="font-size:32px; color:white;"><?php echo $_SESSION["classcode"] . " - " . $_SESSION["classsec"] ?></p>
			</div>
			
			<div class = "container-fluid body-container">
				<p style="font-size:35px; color:#DB9A53; text-align:center;">Grades</p>
				<hr style="border-top: 3px solid #fccb96; width: 15%">
				<br>

				<table class="table table-hover" id="tbl_exporttable_to_xls">
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
				  <form action="class_viewsubmission.php" method="POST">   
				  
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
					  <td><?php $gradeid = $row['submission_filename']; echo $gradeid; ?></td>
					  <td><?php echo $row['submission_date']; ?></td>
					  <td>
					  	<?php 
						  include('submission_authentication.php');
						  if($row['submission_grade'] == 0)
						  {
							  echo "N/A";
						  }
						  else 
						  {
							  echo $row['submission_grade']; 
						  }
						?>
					  </td>
					  <input name="gradeid" value="<?php echo $gradeid; ?>" style="border:0px; font-size:0px; width:0%; line-height: 0px;" hidden>
				</tr>
				  
				  </form>
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
				  <form action="class_viewsubmission.php" method="POST">   
				  
				  <tr>
				  	  
					  <td><?php echo $ref; ?></td>
					  <td><?php echo $row['student_name']; ?></td>
					  <td><?php $gradeid = $row['submission_filename']; echo $gradeid ?></td>
					  <td><?php echo $row['submission_date']; ?></td>
					  <td>
					  	<?php 
						  if($row['submission_grade'] == 0)
						  {
							  echo "N/A";
						  }
						  else 
						  {
							  echo $row['submission_grade']; 
						  }
						?>
					  </td>
					  <input name="gradeid" value="<?php echo $gradeid; ?>" style="border:0px; font-size:0px; width:0%; line-height: 0px;" hidden>
				  </tr>
				  <?php
						}
				  ?>
				  </form>
			</table>

                <button id="downloadexcel" onclick="ExportToExcel('xlsx')" style="color: black; float: right; margin-top: 2%;"> Export Excel </button>

			</div>

			<?php include('submission_sort.php'); ?>
            <footer class="footer-container"> </footer>
    </body>
</html>

<script>
	function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('tbl_exporttable_to_xls');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "<?php echo $_SESSION["classcode"] . " - " . $_SESSION["classsec"] ?>" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('<?php echo $_SESSION["classcode"] . " - " . $_SESSION["classsec"] ?> - Grades.' + (type || 'xlsx')));
    }
</script>
