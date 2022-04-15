<?php 
	include ('dbconnection.php');
	
	$course = $_POST['course'];
	$section = $_POST['section'];
	$subject = $_POST['subject'];
	$announcement = $_POST['announcement'];
	$date = $_POST['date'];
	$ProfName = $_POST['ProfName'];
	
	$sql = "INSERT INTO announcement (course_name,course_section,announcement_title, announcement_content, date, course_instructor) VALUES ('$course','$section','$subject','$announcement','$date', '$ProfName')";
	
	if(mysqli_query($con, $sql)) {
		ob_start();
		header("Location: instructor_updateActivity.php");
		ob_end_flush();
	}
	
	else {
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
?>