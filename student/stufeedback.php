<?php
if(!isset($_SESSION)){
	session_start();
}
include('header.php');
include_once('../dbconection.php');
if(isset($_SESSION['is_login'])){
	$stuemail=$_SESSION['stuloginemail'];
}else{
	echo "<script>location.href='../index.php';</script>";
}

$sql="SELECT * FROM student WHERE stu_email='$stuemail'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
	$row=mysqli_fetch_assoc($result);
	$stuid=$row['stu_id'];
}
if(isset($_REQUEST['stufedsubmitbtn'])){
	if( ($_REQUEST['f_content']=="")){
		$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

	}else{
	
		$fcontent=$_REQUEST["f_content"];
		
		$sql="INSERT INTO feedback (f_content,stu_id) VALUES ('$fcontent','$stuid')";
		$result=mysqli_query($conn,$sql);
		if($result==true){
			$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Thank you for Feedback!!</div>';


		}else{
			$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable Update Student!!</div>';

		}
	}
}
?>
<div class="col-sm-6 mt-5 ">
	
	
	<form class="mx-5" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			
			<label for="stuid">Student ID</label>
			<input type="text" class="form-control" id="stuid" name="stuid" value="<?php
			if(isset($stuid)){
				echo $stuid;
			}?>"readonly>
		</div>
		<div class="form-group">
			<label for="f_content">Write Feedback</label>
			<textarea type="text" class="form-control" id="f_content" name="f_content" row-2>
				</textarea>
		</div>
		
		<button type="submit" class="btn btn-info" id="stufedsubmitbtn" name="stufedsubmitbtn">Submit</button>
		
	<?php
	if(isset($msg)){
	echo $msg;
	} ?>
</form>
	</div>
</div>
</div>
	</body>
</html>