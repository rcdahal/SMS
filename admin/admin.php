
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
	<?php 
	
if(!isset($_SESSION)){
	session_start();
}

include('../dbconection.php');
if(isset($_SESSION['is_admin_login'])){
$stuadminemail=$_SESSION['stuadminemail'];
	
}else{
	echo "<script>location.href='../index.php';</script>";
}
	$sql="SELECT * FROM course";
	$result=mysqli_query($conn,$sql);
	$totalcourse=mysqli_num_rows($result);
	$sql="SELECT * FROM student";
	$result=mysqli_query($conn,$sql);
	$totalstudent=mysqli_num_rows($result);
	?>

<nav  class="navbar navbar-dark fixed-top p-0 shadow" style="background-color:#225470;">
	<a class="navbar-brand col-sm-3 clo-md-2 mr-0" href="admin.php">E-Learning<small class="text-white">Admin Area</small></a></nav>
	<div class="container-fluid mb-5" style="margin-top:40px">
		<div class="row">
			<nav class="col-sm-3 col-md-2 bg-light sidbar py-5 d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="admin.php">
								<i class="fas fa-tachometer-alt"></i>DashBoard</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="course.php">
								<i class="fab fa-accessible-icon"></i>Courses</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="lesson.php">
								<i class="fab fa-accessible-icon"></i>Lessons</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="student.php">
								<i class="fas fa-users"></i>Student</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="admin.php">
								<i class="fas fa-table"></i>Sell Report</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="admin.php">
								<i class="fas fa-table"></i>Payment Status</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="feedback.php">
								<i class="fab fa-accessible-icon"></i>Feedback</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="changepassword.php">
								<i class="fas fa-key"></i>Change Password</a>
							</li>
									<li class="nav-item">
							<a class="nav-link" href="../logout.php">
								<i class="fas fa-sign-out-alt"></i>Logout</a>
							
							</li>
						</ul>
					</div>
				</nav>
				<div class="col-sm-9 mt-5">
				<div class="row mx-5 text-center">
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-danger mb-3" style="max-width:18rem;">
							<div class="card-header">Courses</div>
							<div class="card-body">
								<h4 class="card-title">
									<?php echo $totalcourse; ?>
								</h4>
								<a class="btn text-white" href="#" >View</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-success mb-3" style="max-width:18rem;">
							<div class="card-header">Students</div>
							<div class="card-body">
								<h4 class="card-title">
									<?php echo $totalstudent; ?>
								</h4>
								<a class="btn text-white" href="#" >View</a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 mt-5">
						<div class="card text-white bg-info mb-3" style="max-width:18rem;">
							<div class="card-header">Sold</div>
							<div class="card-body">
								<h4 class="card-title">
									5
								</h4>
								<a class="btn text-white" href="#" >View</a>
							</div>
						</div>
					</div>
				</div>
				<div class="mx-5 mt-5 text-center">
					<p class="bg-dark text-white p-2">Course Ordered</p>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Order ID</th>
								<th scope="col">Course ID</th>
								<th scope="col">Student Email</th>
								<th scope="col">Order Date</th>
								<th scope="col">Amount</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">22</th>
								<td>100</td>
								<td>abc@gmail.com</td>
								<td>20/10/2020</td>
								<td>2000</td>
								<td><button type="submit" class="btn btn-secondary" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
								</td>
								</tr>
								</tbody>
								</table>
								</div>
								</div>
							</div>
						</div>





</body>
</html>