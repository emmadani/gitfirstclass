<?php 
include('header.php')?>
<!--End topbar header-->

  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
    
         
   

      <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Round Vertical Form</div>
           <hr>
            <form>
           <div class="form-group">
            <label for="input-6">Name</label>
            <input type="text" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-7">Email</label>
            <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-8">Mobile</label>
            <input type="text" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-9">Password</label>
            <input type="text" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password">
           </div>
           <div class="form-group">
            <label for="input-10">Confirm Password</label>
            <input type="text" class="form-control form-control-rounded" id="input-10" placeholder="Confirm Password">
           </div>
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
  <?php 
include('footer.php')?>
	
</body>
</html>
