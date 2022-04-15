<?php
    session_start();
?>
<?php 
	include ('dbconnection.php');

	$coursename = $_SESSION["classcode"];
	$coursesection = $_SESSION["classsec"];
	
	$deliverabletitle = $_POST['activitytitle'];
    $description = $_POST['instruction'];
    $duedate = $_POST['activitydeadline'];

	$sql = "INSERT INTO deliverable (course_name, course_section, deliverable_title, deliverable_description, deliverable_duedate) VALUES ('$coursename','$coursesection','$deliverabletitle','$description', '$duedate')";
	
	if(mysqli_query($con, $sql)) {
		ob_start();
		header("Location: class_activity.php");
		ob_end_flush();
	}
	
	else {
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
?>