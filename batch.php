<?php 
include('header.php');
//End topbar header


include('connect.php');
  $q="select * from teacher";
     $q1="select * from curriculum";
  $rows=mysqli_query($conn,$q);
    $rows1=mysqli_query($conn,$q1);

?>	
<!--End topbar header-->

	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
    
         
   

      <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Batch Form</div>
           <hr>
            <form>
                  <div class="form-group">
            <label for="input-7">Batch Name</label>
            <input type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Batch Name">
           </div>
           <div class="form-group">
            <label for="input-6">curriculum ID</label>
             <select type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Teacher ID" >  
            	<?php while ($data=mysqli_fetch_assoc($rows1)) { ?>
<option value="<?php echo $data['CurriculumId'];  ?>"><?php echo $data['CurriculumName'];  ?></option>



<?php }?>
           
            	</select>
           </div>
           <div class="form-group">
            <label for="input-7">Teacher ID</label>
            <select type="text" class="form-control form-control-rounded" id="input-7" placeholder="Enter Teacher ID" >  
            	<?php while ($data=mysqli_fetch_assoc($rows)) { ?>
<option value="<?php echo $data['TeacherId'];  ?>"><?php echo $data['TeacherName'];  ?></option>



<?php }?>
           
            	</select>
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
