<?php
include('./header.php');
include('./dbconection.php');
?>
<div class="container-fluid bg-dark">
	<?php
	if(isset($_GET['$course_id'])){
		$courseid=$_GET['$course_id'];
		$_SESSION['course_id']=$courseid;
		$sql="SELECT * FROM course WHERE course_id='$courseid'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);



}


	 ?>
	<div class="row">
		<img src="i.jpg" alert="courses" style="height:500px; width=100%; object-fit:cover; box-shadow:10px;">
	</div>
</div>
<div class="container mt-5">
	<div  class="row">
		<div class="col-md-4">
			<img src="<?php echo str_replace('..','.',$row['course_img']);?>" style="height:300px;" class="card-img-top" alt="guiter">
		</div>
		<div class="col-md-8">
			<div class="card-body">
				<h5 class="card-title">Course Name:<?php  echo $row['course_name'];?></h5>
				<p class="catd-text"><?php  echo $row['course_desc'];?></p>
				<p class="catd-text">Duration: <?php  echo $row['course_duration'];?></p>
				<form action="checkout.php" method="post">
				<p class="card-text d-inline">Price: <small><del>&#8377 <?php  echo $row['course_original_price'];?></del></small>
							<span class="font-weight-bolder">&#8377 <?php  echo $row['course_price'];?></span></p>
							<input type="hidden" name="id" value="'$row['course_price']'">
				<button type="submit" class="btn btn-primary text-white font-weight-bolder  float-right" name="Buy">Buy Now</button>
				</form>
				</div>
				</div>
				</div>
				<div class="container mt-2">
				<div class="row">
				<table class="table table-bordered table-hover">
				<thead>
				<th scope="col">Lesson No.</th>	
				<th scope="col">Lesson Name</th>
				</thead>
				<tbody>
					<?php 
					$sql="SELECT * FROM lesson";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
						$num=0;
						while($row=mysqli_fetch_assoc($result)){
							if($_GET['$course_id']==$row['course_id']){
								$num++;
							echo '<tr>
				<th scope="col">'.$num.'</th>	
				<td>'.$row['lesson_name'].'</td></tr>';
			             }

						}
					}
					?>
				
				</tbody></table></div></div>	
				</div>

			
				<?php

include('./footer.php');
?>
