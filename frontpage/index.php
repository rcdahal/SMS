<?php
include('./header.php');
include('./dbconection.php');
?>
<div class="container-fluid remove-vid-marg">
	<div class="vid-parent">
		<video playsinline autoplay muted loop>
			<source src="b.mp4">
		</video>
		<div class="vid-overlay">
		</div>
	</div>
	<div class="vid-content">
		<div class="my-content"><h1>Welcome to iSchool</h1>
		<small class="my-content">Learn and Implement</small><br></div>
		<?php 
		if(!isset($_SESSION['is_login'])){
			echo '<a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#myModal">Get Started</a>';
		}else{
			echo '<a class="btn btn-primary mt-3" href="./student/header.php">My Profile</a>';
		}
		?>
		
	
  
</div>
</div>
<div class="container-fluid bg-danger txt-banner">
	<div class="row bottom-banner">
		<div class="col-sm">
			<h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5></div>
		<div class="col-sm">
			<h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5></div>
			<div class="col-sm">
			<h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5></div>
			<div class="col-sm">
			<h5><i class="fas fa-rupee-sign mr-3"></i>Money Back Guarentees</h5></div>
		</div>
	</div>
	<div class="container mt-5">
		<h1 class="text-center">Popular Courses</h1>
			<div class="card-deck mt-4">
				<div class="row">

			<?php
				$sql="SELECT * FROM course LIMIT 3";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$course_id=$row['course_id'];
						echo '
						<div class="col-4">
						<a href="coursedetails.php?$course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px;">

						<div class="card">
					
					
					<img src="d.jpg" class="card-img-top" alt="guiter">
					<div class="card-body">
						<h5 class="card-title">'.$row['course_name'].'</h5>
						<p class="card-text">'.$row['course_desc'].'</p></div>
						<div class="card-footer">
						<p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small>
							<span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
							<a class="btn btn-primary text-white  font-weight-bolder float-right" href="coursedetails.php?$course_id='.$course_id.'">Enroll</a>
						</div>
						</div>
				
				
				</a>
				</div>  ';
		             
					}
				}
				?>
				
			</div>
		</div>
		<div class="card-deck mt-4">
				<div class="row">

			<?php
				$sql="SELECT * FROM course LIMIT 3,3";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$course_id=$row['course_id'];
						echo '
						<div class="col-4">
						<a href="coursedetails.php?$course_id='.$course_id.'" class="btn" style="text-align:left;padding:0px;margin:0px;">

						<div class="card">
					
					
					<img src="d.jpg" class="card-img-top" alt="guiter">
					<div class="card-body">
						<h5 class="card-title">'.$row['course_name'].'</h5>
						<p class="card-text">'.$row['course_desc'].'</p></div>
						<div class="card-footer">
						<p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small>
							<span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
							<a class="btn btn-primary text-white  font-weight-bolder float-right" href="coursedetails.php?$course_id='.$course_id.'">Enroll</a>
						</div>
						</div>
				
				
				</a>
				</div>  ';
		             
					}
				}
				?>
				
			</div>
		</div>
		<div class="text-center m-2">
			<a class="btn btn-danger btn-sm" href="courses.php">View All Course</a>
		</div>
		
			
	</div>

		<?php
		include('./contact.php');
		?>
		
			<div class="container-fluid mt-5" style="background-color:#4B7289" id="feedback">
				<h1 class="text-center testyheading p-4">Student's Feedback</h1>
				<div class="row">
					<?php
					$sql="SELECT s.stu_name,s.stu_doc,s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id=f.stu_id ";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$s_img=$row['stu_img'];
						$n_img=str_replace('..','.',$s_img);

					?>
					<div class="col-md-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<p class="text-light"><?php echo $row['f_content']; ?></p>
								<div class="pic">
									<img src="<?php echo $n_img; ?>" alt="" class="img-thumbnail rounded-circle" style="height:80px;width:80px;">
								</div>
								<div class="testimonial-prof">
									<h4 class="text-light"><?php echo $row['stu_name']; ?></h4>
									<small class="text-light "><?php echo $row['stu_doc']; ?></small>
								</div>
							</div>
						</div>
					</div>
					<?php 
			}
			}
			?>
				
				</div>
			</div>
	
			<div class="container-fluid bg-danger ">
	<div class="row text-white text-center p-1 ">
					<div class="col-sm">
						<a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a></div>
						
					<div class="col-sm">
						<a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a></div>
						
					<div class="col-sm">
						<a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a></div>
						
					<div class="col-sm">
						<a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a></div>
					</div>
				</div>
			</div>
			<div class="container-fluid p-4" style="background-color:#E9ECEF">
				<div class="container" style="background-color:#E9ECEF">
					<div class="row text-center">
						<div class="col-sm">
							<h5>About As</h5>
							<p>this is great school</p>
						</div>
						<div class="col-sm">
							<h5>Category</h5>
							<a class="text-dark" href="#">Web Development</a><br>
							<a class="text-dark" href="#">Web Designing</a><br>
							<a class="text-dark" href="#">Android App Dev</a><br>
							<a class="text-dark" href="#">iOS Development</a><br>
							<a class="text-dark" href="#">Data Analaysis</a><br>
						</div>
						<div class="col-sm">
							<h5>Contact As</h5>
							iSchool
					<p>iSchool,Naya Thimi,<br>ktm,
						Balkot-8<br>Phone:016638321<br>www.iSchool.com</p>
					</div>
				</div>
			</div>
		</div>
	

		<?php
		include('./footer.php');		
		?>
		