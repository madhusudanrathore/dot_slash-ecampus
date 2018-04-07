<?php require './header.php'; ?>

	<div class="container">

		<a class="btn btn-danger" id="lost">Lost an item?</a>
		<a class="btn btn-success" id="found">Found an item?</a>

		<form action="./controller.php" method="POST">
			<div id="lost_form">
				<br />
				<input type="text" name="lost_heading" placeholder="LOST ITEM NAME"><br /><br />
				<textarea rows="10" cols="50" name="lost_content" placeholder="DESCRIBE ITEM LOST"></textarea>
				<!-- SUBMIT -->
				<input type="submit" class="btn btn-success" name="lost_item_btn" value="Post lost item">
				<input type="reset" class="btn btn-danger" value="Cancel">
			</div>
			<div id="found_form">
				<br />
				<input type="text" name="found_heading" placeholder="FOUND ITEM NAME"><br /><br />
				<textarea rows="10" cols="50" name="found_content" placeholder="DESCRIBE ITEM FOUND"></textarea>
				<!-- SUBMIT -->
				<input type="submit" class="btn btn-success" name="found_item_btn" value="Post found item">
				<input type="reset" class="btn btn-danger" value="Cancel">
			</div>
		</form>

		<div class="row">
			<div class="col-sm-10">
			<?php
				$m = new model();
				$result = $m->get_lost_found_page_data();
				if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
			?>
			<div class="jumbotron">
				<h2 class="display-4"><?php echo $row["HEADING"]; ?></h2>
				<p class="lead"><?php echo $row["DESCRIPTION"]; ?></p>
				<p class="lead">Published by: <?php echo $row["FOUND_BY"]; ?></p>
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

	<script type="text/javascript">
		$(document).ready(function () {
			$("#lost_form").hide();
			$("#found_form").hide();
			$("#lost").click(function () {
				 $("#lost_form").show();
				 $("#found_form").hide();
			});
			$("#found").click(function () {
				 $("#found_form").show();
				 $("#lost_form").hide();
			});
		});
	</script>

<?php require './footer.php'; ?>