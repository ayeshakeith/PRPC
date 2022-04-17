<?php
    session_start();
?>
<?php 
	include ('dbconnection.php');

    $studentname = $_SESSION["name"];
	$coursename = $_SESSION["coursecode"];
	$coursesection = $_SESSION["section"];
	
	$submissionfile = $_POST['submissionfile'];

	$did = $_SESSION["did"];

	$sql = "INSERT INTO submissions (deliverable_id, student_name, student_section, course_name, submission_file) VALUES ('$did', '$studentname','$coursesection','$coursename','$submissionfile')";
	
	if(mysqli_query($con, $sql)) {
		ob_start();
		header("Location: course_activities.php");
		ob_end_flush();
	}
	
	else {
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
?>