<?php 
	require './header.php';
	$m=new model();
?>

<div class="container">
	<h3 style="color: #0EA300; border-bottom: #0EA300 solid 2px; margin-top: 2px;">ORDER DETAILS</h3>
	<table class="table table-striped">
		<tr>
			<th>Student Name</th>
			<th>Enrollment No</th>
			<th>Item</th>
			<th>Quantity</th>
			<th>Action</th>
		</tr>

	<?php
		$result = $m->get_canteen_data();
		while ($data=$result->fetch_array()) {
		?>
		<tr>
			<td><?php echo $data['name'] ?></td>
			<td><?php echo $data['enrollment_no'] ?></td>
			<td><?php echo $data['item_name'] ?></td>
			<td><?php echo $data['quantity_item'] ?></td>
			<td><a class="btn btn-danger" href="./controller.php" name="delete_data">DELETE</a></td>
		</tr>
		<?php  } ?>
	</table>
</div>

<?php require './footer.php'; ?>