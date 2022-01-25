<?php
if(!isset($_SESSION)){
	session_start();
}
include('adminheader.php');
include('../dbconection.php');
if(isset($_SESSION['is_admin_login'])){
$stuadminemail=$_SESSION['stuadminemail'];
	
}else{
	echo "<script>location.href='../index.php';</script>";
}
if(isset($_REQUEST['coursesubmitbtn'])){
	if(($_REQUEST['course_name']=="")OR ($_REQUEST['course_desc']=="") OR ($_REQUEST['course_author']=="") OR ($_REQUEST['course_duration']=="")OR ($_REQUEST['course_original_price']=="")OR ($_REQUEST['course_selling_price']=="")){
		$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

	}else{
		$course_name=$_REQUEST['course_name'];
		$course_desc=$_REQUEST['course_desc'];
		$course_author=$_REQUEST['course_author'];
		$course_duration=$_REQUEST['course_duration'];
		$course_original_price=$_REQUEST['course_original_price'];
		$course_price=$_REQUEST['course_selling_price'];
		$course_image=$_FILES['course_img']['name'];
		$course_image_temp=$_FILES['course_img']['tmp_name'];
		$img_folder='../image/courseimage/'.$course_image;
		move_uploaded_file($course_image_temp, $img_folder);
		$sql="INSERT INTO course(course_name,course_desc,course_author,course_img,course_duration,course_price,course_original_price)VALUES('$course_name','$course_desc','$course_author','$img_folder','$course_duration','$course_price','$course_original_price')";
		$result=mysqli_query($conn,$sql);
		if($result==true){
			$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Data Added Successfully!!</div>';


		}else{
			$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Add Course!!</div>';

		}
	}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add New Courses</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" class="form-control" id="course_name" name="course_name">
		</div>
		<div class="form-group">
			<label for="course_desc">Course Description</label>
			<textarea type="text" class="form-control" id="course_desc" name="course_desc" row=2></textarea>
		</div>
		<div class="form-group">
			<label for="course_author">Author</label>
			<input type="text" class="form-control" id="course_author" name="course_author">
		</div>
		<div class="form-group">
			<label for="course_duration">Course Duration</label>
			<input type="text" class="form-control" id="course_duration" name="course_duration">
		</div>
		<div class="form-group">
			<label for="course_original_price">Course Original Price</label>
			<input type="text" class="form-control" id="course_original_price" name="course_original_price">
		</div>
		<div class="form-group">
			<label for="course_selling_price">Course Selling Price</label>
			<input type="text" class="form-control" id="course_selling_price" name="course_selling_price">
		</div>
		<div class="form-group">
			<label for="course_img">Course Image</label>
			<input type="file" class="form-control-file" id="course_img" name="course_img">
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-primary" id="coursesubmitbtn" name="coursesubmitbtn">Submit</button>
		<a href="course.php" class="btn btn-secondary">Close</a>
	</div>
	<?php
	if(isset($msg)){
	echo $msg;
	} ?>
	</form>
</div>

