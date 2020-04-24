<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Enrollment System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$("#myModal").modal('show');
		});
	</script>
</head>
<body>
	<?php require_once 'addS.php'; ?>
	<?php 
		if(isset($_SESSION['message'])): ?>
		
		<div class="alert alert-<?=$_SESSION['msg_type']?>">
		
			<?php 
				echo $_SESSION['message'];
				unset($_SESSION['message']);
				?>
		</div>
		<?php endif; ?>
		
		<!-- -------------------MODAL--------------------------- -->
		<div id="myModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title">Welcom to School Enrollment System</h2>
					</div>
					<div class="modal-body">
						<form>
							<h3>Please take note of the reminders.</h3>
							<div class="form-group">
								<ul>
								<li>Enter your information in the fields that are provided.</li>
								<li>If you want to add <span><u>SUBJECTS</u></span> kindly click the subjects tab in the navigation bar.</li>
								<li>SUBJECTS dropdown list will be updated once you add a new Subject.</li>
								</ul>
							</div>
							<div>
								<button type="button" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- -------------------END OF MODAL--------------------------- -->
		
		<!-- ------------------- NAVBAR --------------------------- -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#"><label class="brand">School Enrollment</label></a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="student.php"><label class="home"><u>Students</u></label></a></li>
			  <li><a href="Subject.php"><label class="home"><u>Subjects</u></label></a></li>
			</ul>
		  </div>
		</nav>
		<!-- --------------------END OF NAVBAR------------------------- -->
		
		<!-- ---------------CONTAINER/CONTENT--------------------------- -->
		<div class="container">
			<div class="row justify-content-center">
				<h1><i>Enrollment System</i></h1>
			<form method='post' action='addS.php'>
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="name" class="form-control" placeholder="Juan Dela Cruz">
				</div>
				<div class="form-group">
					<label>Emaul</label>
					<input type="email" name="email" class="form-control" placeholder="email@example.com">
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input type="tel" name="contact" class="form-control"  placeholder="0942XXXXXXX">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" name="address" class="form-control"  placeholder="House #, Street, Village, City">
				</div>
				<div class="form-group">
					<label>Subject</label><br/>
				<select class="subjects" name="subject">
							<?php
								while($rows = $resultSet->fetch_assoc())
								{
									$name = $rows['name'];
									echo "<option value='$name'>$name</option>";
								}
							?>
						</select>
				</div>
			<div id="Add">
				<button type="submit" class="btn btn-primary" name="add">Add</button>
			</div><br/>
			
				
</body>
</html>