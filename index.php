<?php require './header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
			<?php
				$m = new model();
				$result = $m->get_main_page_blog_data();
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
			?>
			<div class="jumbotron">
				<h2 class="display-4"><?php echo $row["HEADING"]; ?></h2>
				<p class="lead"><?php echo $row["DESCRIPTION"]; ?></p>
				<p class="lead">Author: <?php echo $row["OWNER"]; ?></p>
				<p class="lead">Published on: <?php echo $row["PUBLISH_DATE"]; ?></p>
			</div>
			<?php }
				}else{
			?>
			<h1>NO BLOGS TO DISPLAY!</h1>
			<?php } ?>
			</div>
			<div class="col-sm-2">
			<?php 
				$type = $_SESSION['user_type'];
				if( $type == "STUDENT"){
			?>
				<a href="lost_found.php" class="btn btn-primary" target="_blank">LOST FOUND</a>
			<?php } ?>
			</div>
		</div>
	</div>

<?php require './footer.php'; ?>
