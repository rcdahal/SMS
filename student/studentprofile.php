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
	$stuname=$row['stu_name'];
	$stuocc=$row['stu_doc'];
	$stuimg=$row['stu_img'];
}



if(isset($_REQUEST['stuupdatebtn'])){
	if( ($_REQUEST['stuname']=="")){
		$msg='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';

	}else{
	
		$sname=$_REQUEST['stuname'];
		$socc=$_REQUEST['stuocc'];
		$stu_img=$_FILES['stuimg']['name'];
		$stu_img_temp=$_FILES['stuimg']['tmp_name'];
		$img_folder='../image/stu/'.$stu_img;
		move_uploaded_file($stu_img_temp, $img_folder);
		$sql="UPDATE student SET stu_name='$sname',stu_doc='$socc',stu_img='$img_folder' WHERE stu_email='$stuemail'";
		$result=mysqli_query($conn,$sql);
		if($result==true){
			$msg='<div class="alert alert-success col-sm-6 ml-5 mt-2">Data Updated Successfully!!</div>';


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
			<label for="stuemail">Student Email</label>
			<input type="text" class="form-control" id="stuemail" name="stuemail" value="<?php
			if(isset($stuemail)){
				echo $stuemail;
			}?>"readonly>
		</div>
		<div class="form-group">

			
			<label for="stuname">Student Name</label>
			<input type="text" class="form-control" id="stuname" name="stuname" value="<?php
			if(isset($stuname)){
				echo $stuname;
			}?>">
		</div>
		<div class="form-group">
			
			<label for="stuocc">Student Occupation</label>
			<input type="text" class="form-control" id="stuocc" name="stuocc" value="<?php
			if(isset($stuocc)){
				echo $stuocc;
			}?>">
		</div>
		
		<div class="form-group">
			
			<label for="stuimg">Upload Image</label>
			<input type="file" class="form-control-file" id="stuimg" name="stuimg">
		</div>
		<button type="submit" class="btn btn-info" id="stuupdatebtn" name="stuupdatebtn">Update</button>
		
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