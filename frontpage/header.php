<!DOCTYPE html>
<html 	lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>ischool</title>
</head>
<body>
	
	<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">iSchool</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav pl-5" >
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="paymentstatus.php">Payment Status</a>
        </li>
        <?php 
        session_start();
        if(isset($_SESSION['is_login'])){
        echo ' <li class="nav-item custom-nav-item">
          <a class="nav-link" href="./student/header.php">My Profile</a>
        </li>
         <li class="nav-item custom-nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        ';
    }else{
    echo'   <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#myloginModal">Login</a>
        </li>
         <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Sign Up</a>
        </li>
    ';

}
        ?>
        
      
         <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
         <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>