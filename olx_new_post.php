<?php require './header.php'; ?>

	<div class="container">
		<h1>New Campus-olx post</h1><br />
		<form method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" name="ad_heading" placeholder="heading goes here"><br /><br />
				<textarea rows="10" cols="50" name="ad_content" placeholder="content goes here"></textarea>
			</div>
  			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success" name="new_ad_btn" value="Publish">
			<input type="reset" class="btn btn-danger" value="Cancel">
		</form>
	</div>

<?php require './footer.php'; ?>