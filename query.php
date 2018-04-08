<?php require './header.php'; ?>

	<div class="container">
		<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px;">ASK YOUR DOUBTS HERE:</h3>
		<div class="jumbotron">
		<form method="POST" action="./controller.php" enctype="multipart/form-data">
			<div class="form-group">
				Topic of your doubt: <input type="text" name="query_heading" placeholder="heading goes here"><br /><br />
				Describe your doubt: <textarea rows="10" cols="50" name="query_content" placeholder="content goes here"></textarea><br><br>
				Select image to upload:
    			<input type="file" class="btn btn-info" name="img" id="fileToUpload"><br>
			</div>

			<!-- SELECT DEPARTMENT -->
			<p>Select Department:</p>
			<input type="radio" name="department_type" value="GENERAL" checked>General<br />
  			<input type="radio" name="department_type" value="IT" >I.T.<br />
  			<input type="radio" name="department_type" value="EC">E.C.<br />
  			<input type="radio" name="department_type" value="CSE">C.S.E.<br />
  			<input type="radio" name="department_type" value="EE">Electrical<br />
  			<br /><br />
			<input type="hidden" name="query_id">
  			<!-- SUBMIT -->
			<input type="submit" class="btn btn-success" name="new_query_btn" value="Post">
			<input type="reset" class="btn btn-danger" name="cancel_query_btn" value="Cancel">
		</form>
	</div>
	</div>

<?php require './footer.php'; ?>