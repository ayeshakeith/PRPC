<?php
    session_start();
?>
<?php 
	include ('dbconnection.php');

	$coursename = $_SESSION["classcode"];
	$coursesection = $_SESSION["classsec"];
	$courseinstructor = $_SESSION["name"];
	
	$announcementtitle = $_POST['subject'];
	$announcement = $_POST['content'];
	
	$sql = "INSERT INTO announcement (course_name, course_instructor, course_section, announcement_title, announcement_content, date) VALUES ('$coursename','$courseinstructor','$coursesection','$announcementtitle','$announcement', now())";
	
	if(mysqli_query($con, $sql)) {
		ob_start();
		header("Location: class_announcement.php");
		ob_end_flush();
	}
	
	else {
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}
?>