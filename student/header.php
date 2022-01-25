<?php
if(!isset($_SESSION)){
	session_start();
}
include_once('../dbconection.php');
if(isset($_SESSION['is_login'])){
$stuloginemail=$_SESSION['stuloginemail'];
	
}//else{
	//echo "<script>location.href='../index.php';</script>";
//}
if(isset($stuloginemail)){
	$sql="SELECT stu_img FROM student WHERE stu_email='$stuloginemail'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);


	$stu_img=$row['stu_img'];

	

}?>
<!DOCTYPE html>
<html 	lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="..css/adminstyle.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>IOECBT</title>
</head>
<body>
	<nav  class="navbar navbar-dark fixed-top p-0 shadow" style="background-color:#225470;">
	<a class="navbar-brand col-sm-3 clo-md-2 mr-0" href="studentprofile.php">E-Learning</a></nav>
	<div class="container-fluid mb-5" style="margin-top:40px">
		<div class="row">
			<nav class="col-sm-2 bg-light sidbar py-5 d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mb-3">
							<img src="<?php echo $stu_img;?>" alt="studentimage" class="img-thumbnail rounded-circle">
						</li>
						<li class="nav-item">
							<a class="nav-link" href="studentprofile.php">
								<i class="fas fa-user"></i>
								Profile<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="mycourse.php">
								<i class="fab fa-accessible-icon"></i>My Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="stufeedback.php">
								<i class="fab fa-accessible-icon"></i>Feedback
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="stupass.php">
								<i class="fas fa-key"></i>Change Password
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../logout.php">
								<i class="fas fa-sign-out-alt"></i>Logout
							</a>
						</li>
					</ul>
				</div>
			</nav>

