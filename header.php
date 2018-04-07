<?php
	require './model.php';
	session_start();
	if(!isset($_SESSION['user_email'])) {
		header("location:./register.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="jumbotron jumbotron-fluid" style="text-align: center;">
		<h1 class="display-4">Welcome to E-LDCE!</h1>
		<p class="lead">Making academics digital and easier</p>
		<div style="float: right;">
			<p>Hello! <b><?php echo $_SESSION['user_name']; ?></b></p>
			<?php 
				$type = $_SESSION['user_type'];
				if( $type == "AUTHORITY"){
			?>
				<a href="./create_blog.php" target="_blank" class="btn btn-primary" value="New Blog">New Blog</a>
			<?php } ?>
			<form method="POST" action="./controller.php">
				<input type="submit" class="btn btn-danger" name="log_out_btn" value="Log Out">
			</form>
		</div>
	</div>