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
        
          <form id="myregiform">
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
        	 <button type="button" class="btn btn-primary" id="sturegibtn" onclick="addStu()">Signup</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
        </div>
        
      </div>
    </div>
  </div>