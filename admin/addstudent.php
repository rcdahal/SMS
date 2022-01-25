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
if(isset($_REQUEST['studentsubmitbtn'])){
	if(($_REQUEST['stu_name']=="")OR ($_REQUEST['stu_email']=="") OR ($_REQUEST['stu_pass']=="") OR ($_REQUEST['stu_doc']=="")){
		$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

	}else{
		$stu_name=$_REQUEST['stu_name'];
		$stu_email=$_REQUEST['stu_email'];
		$stu_pass=$_REQUEST['stu_pass'];
		$stu_doc=$_REQUEST['stu_doc'];
		$stu_img=$_FILES['stu_img']['name'];
		$stu_img_temp=$_FILES['stu_img']['tmp_name'];
		$img_folder='../image/studentimage/'.$stu_img;
		move_uploaded_file($stu_img_temp, $img_folder);
		$sql="INSERT INTO student(stu_name,stu_email,stu_pass,stu_doc,stu_img)VALUES('$stu_name','$stu_email','$stu_pass','$stu_doc','$img_folder')";

		$result=mysqli_query($conn,$sql);
		if($result==true){
			$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Data Added Successfully!!</div>';


		}else{
			$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Add Student!!</div>';

		}
	}
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
	<h3 class="text-center">Add New Student</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stu_email">Student Email</label>
			<input type="text" class="form-control" id="stu_email" name="stu_email">
		</div>
		<div class="form-group">
			<label for="stu_name">Student Name</label>
			<input type="text" class="form-control" id="stu_name" name="stu_name">
		</div>
		<div class="form-group">
			<label for="stu_pass">Student Password</label>
			<input type="text" class="form-control" id="stu_pass" name="stu_pass">
		</div>
		<div class="form-group">
			<label for="stu_doc">Student Occupation</label>
			<textarea type="text" class="form-control" id="stu_doc" name="stu_doc" row=1></textarea>
		</div>
		<div class="form-group">
			<label for="stu_img">Student Image</label>
			<input type="file" class="form-control-file" id="stu_img" name="stu_img">
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-primary" id="studentsubmitbtn" name="studentsubmitbtn">Submit</button>
		
	</div>
	<?php
	if(isset($msg)){
	echo $msg;
	} ?>
	</form>
</div>

