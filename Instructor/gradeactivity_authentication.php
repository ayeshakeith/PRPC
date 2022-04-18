<?php
    session_start();
?>
<?php 
	include ('dbconnection.php');

	$coursename = $_SESSION["classcode"];
	$coursesection = $_SESSION["classsec"];
	
	$subfn = $_SESSION['test'];
    $grade = $_POST['grade'];
    

	$sql = "UPDATE submissions SET submission_grade='$grade' WHERE submission_filename='$subfn'";
	
	if(mysqli_query($con, $sql)) {
		ob_start();
		header("Location: class_submissions.php");
		ob_end_flush();
	}
	
	else {
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
?>