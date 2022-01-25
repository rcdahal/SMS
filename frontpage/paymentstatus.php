<?php
include('./header.php');
?>
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="i.jpg" alert="courses" style="height:500px; width=100% object-fit:cover; box-shadow:10px;">
	</div>
</div>
<div class="container mt-5">
	<h2 class="text-center">Payment Status</h2>
	<form method="post" action=""><br>
		<div  class="form-group row">
		<label class="offset-sm-3 col-form-label">Order ID:</label>
		<div>
			<input type="text" class="form-control mx-3">
		</div>
		<div>
		<input type="submit" class="btn btn-primary mx-4" value="view">
	</div>
</div>

	</form>
</div>


	
<?php
		include('./contact.php');		
		?>

<?php
		include('./footer.php');		
		?>