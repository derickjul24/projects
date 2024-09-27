<?php

$mysqli = new mysqli('localhost', 'root','','enroll') or die(mysqli_error($mysqli));
$resultSet = $mysqli->query("SELECT name FROM subject");

//ADD
if(isset($_POST['add'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$subject = $_POST['subject'];
	
	$mysqli->query("INSERT INTO students(name,email,contact,address,subject) VALUES('$name','$email','$contact','$address', '$subject')") or die($mysqli->error);
	
	$_SESSION['message'] = "Record has been saved.";
	$_SESSION['msg_type'] = "success";
	
	header("location: student.php");
	
}
?>