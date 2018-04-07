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
		<p class="lead">Making academics digital easier</p>
		<?php if(isset($_SESSION['user_email'])) { ?>
		<form method="POST" action="./controller.php">
			<span style="float: right;">Hello! <b><?php echo $_SESSION['user_name']; ?></b></span>
			<input type="submit" class="btn btn-danger" name="log_out_btn" value="Log Out">
		</form>
		<?php } ?>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h1>New User?</h1>
				<h2>Register Below</h2>
				<form method="POST" action="./controller.php">
					<div class="form-group" style="text-align: center;">
						<input type="text" class="form-control" name="user_name" placeholder="enter name">
						<input type="email" class="form-control" name="user_email" placeholder="enter email">
						<input type="text" class="form-control" name="user_dept" placeholder="enter department">
						<input type="number" class="form-control" name="user_contact_number" placeholder="enter contact number">
						<input type="password" class="form-control" name="user_password" placeholder="password">
					</div>
					<p>Select your type</p>
					<input type="radio" id="teacher" name="user_type" value="AUTHORITY">College Authority
  					<input type="radio" id="student" name="user_type" value="STUDENT" checked>Student
  					<input type="number" id="parent_number" class="form-control" name="parent_contact_number" placeholder="enter parent's contact number">
  					<br/><br/>
					<input type="submit" class="btn btn-primary" name="register_btn" value="Register">
					<input type="reset" class="btn btn-secondary" value="Reset Form">
				</form>
			</div>
			<div class="col-sm-6">
				<h1>Already have an Account?</h1>
				<form method="POST" action="./controller.php">
					<div class="form-group" style="text-align: center;">
						<input type="email" class="form-control" name="user_email" placeholder="enter email">
						<input type="password" class="form-control" name="user_password" placeholder="password">
					</div>
					<input type="submit" class="btn btn-success" name="log_in_btn" value="Log In">
					<input type="reset" class="btn btn-secondary" value="Reset">
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#parent_number").hide();
			$("#student").click(function () {
				 $("#parent_number").show();
			});
			$("#teacher").click(function () {
				 $("#parent_number").hide();
			});
		});
	</script>
