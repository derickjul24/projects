	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="UTF-8">
		<title>Enrollment System</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<?php require_once 'add.php'; ?>
		
		<?php 
			if(isset($_SESSION['message'])): ?>
			
			<div class="alert alert-<?=$_SESSION['msg_type']?>">
			
				<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);
					?>
			</div>
			<?php endif; ?>
			
		<!-- -------------------NAVBAR--------------------------- -->
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
		<!-- -------------------END OF NAVBAR--------------------------- -->
		
		<!-- -----------------CONTAINER/CONTENT--------------------------- -->
		<div class="container">
			<div class="row justify-content-center">
			<form method="POST" action="add.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<label>Subject</label>
				<input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter Subject">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input type="text" name="description" class="form-control" value="<?php echo $description; ?>" placeholder="Enter Description">
			</div>
			<div class="form-group">
				<label>Assigned Teacher</label>
				<input type="text" name="teacher" class="form-control" value="<?php echo $teacher; ?>" placeholder="Enter Teacher">
			</div>
			<div class="form-group">
			<?php
				if($update == true):
			?>
				<button type="submit" class="btn-info" name="update">Update</button>
			<?php else: ?>
				<button type="submit" class="btn-primary" name="save">Add Subject</button>
			<?php endif; ?>
			</div>
		</form>
		</div>
		<!-- -------------------END OF CONTENT--------------------------- -->
		
		<!-- -------------------Display list--------------------------- -->
		<?php
			$mysqli = new mysqli('localhost', 'root','','enroll') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM subject") or die(mysqli_error($mysqli));
			//pre_r($result);
			?>		
			<div class="row justify-content-center">
				<table class="table">
					<thead>
						<tr>
							<th>Subject</th>
							<th>Description</th>
							<th>Teacher</th>
						</tr>
					</thead>
					
					<?php
						while($row = $result->fetch_assoc()): ?>
						<tr>
							<td><?php echo $row['name'];?></td>
							<td><?php echo $row['description'];?></td>
							<td><?php echo $row['teacher'];?></td>
							<td>
								<a href="Subject.php?edit=<?php echo $row['id']; ?>"
									class="btn btn-info">Edit</a>
								<a href="Subject.php?delete=<?php echo $row['id']; ?>"
									class="btn btn-danger">Delete</a>
							</td>
						</tr>
						<?php endwhile; ?>
				</table>
			</div>
		<?php
			function pre_r($array){
				echo'<pre>';
				print_r($array);
				echo '</pre>';
			}
		?>
		</div>
		<!-- -------------------END OF DISPLAY LIST--------------------------- -->
		
	</body>
	</html>