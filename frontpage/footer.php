<footer class="container-fluid bg-dark text-center p-2">
			<small class="text-white">Copyright &copy; 2020 //Designed By//E-Learing//<a href="#" data-toggle="modal" data-target="#myadminModal">Admin Login</a></small></footer>
			<!-- Button trigger modal -->

<div class="container">
  
  <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Registration</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
          <form id="sturegform">
          	<div class="mb-3">
          		<i class="fas fa-user"></i>
    <label for="stuname" class="pl-2 font-weight-bold">Name</label>
    <small id="statusmsg1"></small>
    <input type="name" class="form-control" name="stuname" id="stuname" >
    
  </div>
  <div class="mb-3">
  	<i class="fas fa-envelope"></i>
    <label for="stuemail" class="pl-2 font-weight-bold">Email address</label><small id="statusmsg2"></small>
    <input type="email" class="form-control" name="stuemail" id="stuemail" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  	<i class="fas fa-key"></i>
    <label for="stupass" class="pl-2 font-weight-bold">New Password</label><small id="statusmsg3"></small>
    <input type="password" class="form-control" name="stupass" id="stupass">
  </div>
  
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<span id="successmsg"></span>
        	 <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Signup</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
        
      </div>
    </div>
  </div>
<div class="container">
  
  <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal fade" id="myadminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Admin Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
          <form id="myadminform">
          	
  <div class="mb-3">
  	<i class="fas fa-envelope"></i>
    <label for="stuadminemail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" name="stuadminemail" id="stuadminemail" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
  	<i class="fas fa-key"></i>
    <label for="stuadminass" class="pl-2 font-weight-bold"> Password</label>
    <input type="password" class="form-control" name="stuadminpass" id="stuadminpass">
  </div>
  
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<span id="adminbtn"></span>
        	 <button type="button" class="btn btn-primary" id="adminbtn" onclick="checkAdminlogin()">Login</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container">
  
  <!-- Button to Open the Modal -->
  

  <!-- The Modal -->
  <div class="modal fade" id="myloginModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Student Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
          <form id="myloginform">
          	
  <div class="mb-3">
  	<i class="fas fa-envelope"></i>
    <label for="stuloginemail" class="pl-2 font-weight-bold">Email address</label>
    <input type="email" class="form-control" name="stuloginemail" id="stuloginemail">  
  </div>
  <div class="mb-3">
  	<i class="fas fa-key"></i>
    <label for="stuloginpass" class="pl-2 font-weight-bold"> Password</label>
    <input type="password" class="form-control" name="stuloginpass" id="stuloginpass">
  </div>
  
</form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        	<span id="loginbtn"></span>
        	 <button type="button" class="btn btn-primary" id="loginbtn" onclick="checkStulogin()">Login</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
       
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<script>
	$(document).ready(function(){
		$("#stuemail").on("keypress blur",function(){
			var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
			var stuemail=$("#stuemail").val();
			$.ajax({
				url:'student/addstudent.php',
				method:'POST',
				data:{
					checkemail:"checkemail",
					stuemail:stuemail,
				},
				success:function(data){
					console.log(data);
					if(data !=0){
						$("#statusmsg2").html('<small style="color:red;"> Email Already Exists!!</small>');
						$("#signup").attr("disabled",true);
						
						}else if(data=0){
							$("#statusmsg2").html('<small style="color:green;"> You May Proceed!!</small>');
						$("#signup").attr("disabled",false);

						}else if( !reg.test(stuemail)){
		               $("#statusmsg2").html('<small style="color:red;"> Please Enter valid Email e.g.example@gmail.com</small>');
						$("#signup").attr("disabled",true);


	}
				}
			});

		});



	});





	function addStu(){
		var reg=/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
 	
 	var stuname=$("#stuname").val();
	var stuemail=$("#stuemail").val();
	var stupass=$("#stupass").val();
	if(stuname.trim()==""){
		$("#statusmsg1").html('<small style="color:red;">Plese Enter Name!!</small>');
		
    $("#stuname").focus();
    return false;
	}else if(stuemail.trim()==""){
		$("#statusmsg2").html('<small style="color:red;">Plese Enter Email Address!!</small>');
		
    $("#stuemail").focus();
    return false;
	}else if(stuemail.trim()!="" && !reg.test(stuemail)){
		$("#statusmsg2").html('<small style="color:red;">Plese Enter valid Email Address e.g. example@gmail.com</small>');
		
    $("#stuemail").focus();
    return false;


	}
	else if(stupass.trim()==""){
		$("#statusmsg3").html('<small style="color:red;">Plese Enter Password!!</small>');
	
    $("#stupass").focus();
    return false;
	}else{

	$.ajax({
		url:'student/addstudent.php',
		method:'POST',
		dataType: "json",
				data:{
			sturegibtn:"sturegibtn",
			stuname:stuname,
			stuemail:stuemail,
			stupass:stupass,
		},
		success: function(data){
			console.log(data);
			if(data == "ok"){
				$("#successmsg").html("<span class='alert alert-success'>Registration Succesfully!!</span>");
				clearSturegfield();
			}
			else if(data=="failed"){
				$("#successmsg").html("<span class='alert alert-danger'>Registration Failed!!</span>");

			}
		}
	})
}


}
function clearSturegfield(){
	$("#sturegform").trigger("reset");
	$("#statusmsg1").html("");
	$("#statusmsg2").html("");
	$("#statusmsg3").html("");
}
function checkStulogin(){
	
	var stuloginemail=$("#stuloginemail").val();
	var stuloginpass=$("#stuloginpass").val();
	$.ajax({
		url:'student/addstudent.php',
		method:'POST',
		dataType: "json",
				data:{
			loginbtn:"loginbtn",
			stuloginemail:stuloginemail,
			stuloginpass:stuloginpass,
			
		},
		
        success: function(data){
        	if(data==0){
        	     		$("#loginbtn").html('<span class="alert alert-danger">Invalid Email or Password!!</span>');

        	}else if(data==1){
        		$("#loginbtn").html('<div class="spinner-border text-success" role="status"></div>');
        		setTimeout(()=>{
        			window.location.href="index.php";
        		},1000);
        	}
        },



	})


}
function checkAdminlogin(){
	
	var stuadminemail=$("#stuadminemail").val();
	var stuadminpass=$("#stuadminpass").val();
	$.ajax({
		url:'admin/adminlogin.php',
		method:'POST',
		dataType: "json",
				data:{
			loginadminbtn:"loginadminbtn",
			stuadminemail:stuadminemail,
			stuadminpass:stuadminpass,
			
		},
		
        success: function(data){
        	console.log(data);
        	if(data==0){
        	     		$("#adminbtn").html('<span class="alert alert-danger">Invalid Email or Password!!</span>');

        	}else if(data==1){
        		$("#adminbtn").html('<span class="alert alert-success">Operation Succesful!!</span>');
        		setTimeout(()=>{
        			window.location.href="admin/admin.php";
        		},1000);
        	}
        },



	})


}


 
</script>

							


	</body>
</html>