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
	<title>E-LDCE</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- NAVIGATION BAR -->
	<nav class="navbar navbar-inverse" >
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="index.php">E-Campus</a>
    		</div>
    		<ul class="nav navbar-nav">
      			<li>
      				<a href="index.php">HOME</a>
      			</li>
      			<!--CLUBS-->
      			<li>
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">CLUBS<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="#">CLUB 1</a></li>
			          <li><a href="#">CLUB 2</a></li>
			          <li><a href="#">CLUB 3</a></li>
			        </ul>
      			</li>
      			<!-- ACHIEVEMENTS -->
      			<li><a href="achievements.php">ACHIEVEMENTS</a></li>
      			<!-- LIBRARY-->
      			<li><a href="#">e-LIBRARY</a></li>
      			<!--DEPARTMENTS-->
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">DEPARTMENTS<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="#">DEPARTMENT 1</a></li>
			          <li><a href="#">DEPARTMENT 2</a></li>
			          <li><a href="#">DEPARTMENT 3</a></li>
			        </ul>
      			</li>
      			<!-- FACILITIES-->
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">FACILITIES<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="#">LOST &amp FOUND</a></li>
			          <li><a href="#">CANTEEN</a></li>
			          <li><a href="#">CAMPUS OLX</a></li>
			        </ul>
      			</li>
    		</ul>
  		</div>
	</nav>

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
