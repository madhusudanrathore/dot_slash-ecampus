<?php require './header.php'; ?>

	<div class="container">
		<h1>New ForHire post</h1><br />
		<form method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" name="hire_heading" placeholder="heading goes here"><br /><br />
				<textarea rows="10" cols="50" name="hire_content" placeholder="content goes here"></textarea><br />
				<p>Select hire type</p>
				<input type="radio" name="vehicle_type" value="FOUR" checked>Four Wheeler<br />
				<input type="radio" name="vehicle_type" value="TWO">Two Wheeler<br />
				<input type="radio" name="vehicle_type" value="BIKE">Bike<br />
			</div>
  			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success" name="new_hire_btn" value="Publish">
			<input type="reset" class="btn btn-danger" value="Cancel">
		</form>
	</div>

<?php require './footer.php'; ?>