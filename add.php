<?php

session_start();

$mysqli = new mysqli('localhost', 'root','','enroll') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$name = '';
$description = '';
$teacher = '';

//SAVE
if(isset($_POST['save'])){
	$name = $_POST['name'];
	$description = $_POST['description'];
	$teacher = $_POST['teacher'];
	
	$mysqli->query("INSERT INTO subject(name,description,teacher) VALUES('$name','$description','$teacher')") or die($mysqli->error);
	
	$_SESSION['message'] = "Record has been saved.";
	$_SESSION['msg_type'] = "success";
	
	header("location: Subject.php");
	
}

//DELETE
if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM subject WHERE id=$id") or die($mysqli->error);
	
	$_SESSION['message'] = "Record has been deleted.";
	$_SESSION['msg_type'] = "danger";
	
	header("location: Subject.php");
}

//EDIT
if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM subject WHERE id=$id") or die($mysqli->error());
	if (count($result)== 1){
		$row = $result->fetch_array();
		$name = $row['name'];
		$description = $row['description'];
		$teacher = $row['teacher'];
	}
}

//UPDATE
if (isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$teacher = $_POST['teacher'];
	
	$mysqli->query("UPDATE subject SET name='$name', description='$description', teacher='$teacher' WHERE id=$id") or die($mysqli->error);
	
	$_SESSION['message'] = "Record has been updated.";
	$_SESSION['msg_type'] = "warning";
	
	header("location: Subject.php");
}

?>