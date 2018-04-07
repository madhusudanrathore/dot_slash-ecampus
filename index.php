<?php
	require './header.php';
	$m = new model();
	$result = $m->get_main_page_blog_data();
?>
	<div class="container">
		<?php
			if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
		?>
		<div class="jumbotron">
			<h2 class="display-4"><?php echo $row["HEADING"]; ?></h2>
			<p class="lead"><?php echo $row["DESCRIPTION"]; ?></p>
			<p class="lead">published by <?php echo $row["OWNER"]. " on " .  $row["PUBLISH_DATE"]; ?></p>
			
		</div>
		<?php }
			}else{
		?>
		<h1>NO BLOGS TO DISPLAY!</h1>
		<h4>Start blogging today!</h4>
		<?php } ?>
	</div>
