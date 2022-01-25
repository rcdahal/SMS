<?php 
if(!isset($_SESSION)){
	session_start();
}
include_once('../dbconection.php');
if(isset($_POST['checkemail'])&& isset($_POST['stuemail'])){
	$stuemail=$_POST['stuemail'];
	$sql="SELECT stu_email FROM student WHERE stu_email='".$stuemail."' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);
	echo json_encode($row);

}


if(isset($_POST['sturegibtn'])&& isset($_POST['stuname'])&&isset($_POST['stuemail'])&&isset($_POST['stupass'])){
	$stuname=$_POST['stuname'];
	$stuemail=$_POST['stuemail'];
	$stupass=$_POST['stupass'];

	$sql="INSERT INTO student(stu_name,stu_email,stu_pass)VALUES('$stuname','$stuemail','$stupass')";
	$result=mysqli_query($conn,$sql);
	if($result==TRUE){
		echo json_encode("ok");
	}else{
		echo json_encode("failed");
	}
}
if(!isset($_SESSION['is_login'])){
if(isset($_POST['loginbtn'])&& isset($_POST['stuloginemail'])&&isset($_POST['stuloginpass'])){
	$stuloginemail=$_POST['stuloginemail'];
	$stuloginpass=$_POST['stuloginpass'];
	
	
	$sql="SELECT stu_email, stu_pass FROM student WHERE stu_email='".$stuloginemail."' AND stu_pass='".$stuloginpass."'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($result);
	if($row==1){
		$_SESSION['is_login']=true;
		$_SESSION['stuloginemail']=$stuloginemail;
	echo json_encode($row);

}else if($row==0){
	echo json_encode($row);


}
}
}
?>