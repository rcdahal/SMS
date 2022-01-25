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
$stuemail=$_SESSION['stuloginemail'];

if (isset($_REQUEST['stuupdatebtn'])){
	if($_REQUEST['stu_newpass']==""){
		$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
	}else{
		$sql="SELECT * FROM student WHERE stu_email='$stuemail'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==1){
			$stupass=$_REQUEST['stu_newpass'];
			$sql="UPDATE student SET stu_pass='$stupass'WHERE stu_email='$stuemail'";
			$result=mysqli_query($conn,$sql);
			if($result==true){
				$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Password Change Successfully!!</div>';
			}else{
				$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Change Password!!</div>';
			} 
		}

	}
}
?>
<div class="col-sm-4 mt-5 ">
	
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			
			<label for="admin_email">Email</label>
			<input type="text" class="form-control" id="admin_email" name="admin_email" value="<?php
			
				echo $stuemail;
			?>" readonly>
		</div>
	
		<div class="form-group">
			
			<label for="stu_newpass">New Password</label>
			<input type="text" class="form-control" id="stu_newpass" name="stu_newpass">
		
		</div>
		<div class="text-center">
		<button type="submit" class="btn btn-info" id="stuupdatebtn" name="stuupdatebtn">Update</button>
		
	</div>
	<?php
	if(isset($msg)){
	echo $msg;
	} ?>
	</form>
</div>
