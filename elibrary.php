<?php require './header.php'; ?>

	<div class="container">

		<?php if($_SESSION['user_type'] == "AUTHORITY" ) { ?>
		<p id="show_new_book_form" class="btn btn-info" target="_blank">Upload Book</p>
		<form id="new_book_form" method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Book Name Here" name="book_name">
				<input type="text" class="form-control" placeholder="Author Name here" name="author_name">
				<input type="text" class="form-control" placeholder="URL here" name="book_url">
				<!-- SELECT DEPARTMENT -->
				<p>Select Department:</p>
				<input type="radio" name="department_type" value="GENERAL" checked>General
	  			<input type="radio" name="department_type" value="IT" >I.T.
	  			<input type="radio" name="department_type" value="EC">E.C.
	  			<input type="radio" name="department_type" value="CSE">C.S.E.
	  			<input type="radio" name="department_type" value="EE">Electrical
	  			<br /><br />
	  			<input type="submit" name="insert_new_book" value="Upload">
			</div>
		</form>
		<?php } ?>

		<br /><br />

		<p class="lead">Search books</p>
		<form method="POST" action="./controller.php">
			<div class="form-group">
				<input type="text" class="form-control" name="book_name" placeholder="Book name goes here"><br />
				<input type="text" class="form-control" name="author_name" placeholder="Author name goes here">
				<!-- SELECT DEPARTMENT -->
				<p>Select Department:</p>
				<input type="radio" name="department_type" value="GENERAL" checked>General
	  			<input type="radio" name="department_type" value="IT" >I.T.
	  			<input type="radio" name="department_type" value="EC">E.C.
	  			<input type="radio" name="department_type" value="CSE">C.S.E.
	  			<input type="radio" name="department_type" value="EE">Electrical
	  			<br /><br />
			</div>
		</form>

	<?php
		$m = new model();
		$result = $m->get_book_list();
		if ($result->num_rows > 0) {
			$count = 0;
			while($row = $result->fetch_assoc()) {
				++$count;
	?>
		<table class="table table-striped">
			<tr>
				<th>Index</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>Department</th>
				<th>Google Link</th>
			</tr>
			<tr>
				<td><p class="lead"><?php echo $count; ?></p></td>
				<td><p class="lead"><?php echo $row["NAME"]; ?></p></td>
				<td><p class="lead"><?php echo $row["AUTHOR"]; ?></p></td>
				<td><p class="lead"><?php echo $row["DEPARTMENT"]; ?></p></td>
				<td><p class="lead"><a class="btn btn-link" target="_blank" href="<?php echo $row["LINK"]; ?>">View PDF</a></td>
			</tr>
		</table>
	<?php }
		}else{
	?>
		<h1>NO BOOKS TO DISPLAY!</h1>
	<?php } ?>
	</div>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#new_book_form").hide();
			$("#show_new_book_form").click(function () {
				$("#new_book_form").toggle();
			});
		});
	</script>

<?php require './footer.php'; ?>