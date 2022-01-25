<?php
include('./header.php');
include('./dbconection.php');
?>
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="i.jpg" alert="courses" style="height:500px; width=100% object-fit:cover; box-shadow:10px;">
	</div>
</div>
<div class="container mt-5">
		<h1 class="text-center">All Courses</h1>
			<div class="row mt-4">

			<?php
				$sql="SELECT * FROM course";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$course_id=$row['course_id'];
						
					

				
					echo '<div class="col-sm-4 mb-4">
			<a href="href="coursedetails.php?$course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px;">
				<div class="card">
					<img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="guiter" style="height:200px;width:347px;">
					<div class="card-body">
						<h5 class="card-title"> '.$row['course_name'].'</h5>
						<p class="card-text">'.$row['course_desc'].'</p></div>
						<div class="card-footer">
						<p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small>
							<span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
							<a class="btn btn-primary text-white  font-weight-bolder float-right" href="coursedetails.php?$course_id='.$course_id.'">Enroll</a>
						</div>
					</div>
				</a>
				</div>';
			 
		}
		}
?>

			</div>
		</div>

			




<?php
		include('./footer.php');		
		?>