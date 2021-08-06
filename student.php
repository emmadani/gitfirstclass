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
            <input type="text" name="s-name" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
            <div class="form-group">
            <label for="input-6">Email</label>
            <input type="text" name="s-email" class="form-control form-control-rounded" id="input-6" placeholder="Enter Email">
           </div>
           <div class="form-group">
            <label for="input-7">Batch Id</label>
            <input type="text" name="s-batch" class="form-control form-control-rounded" id="input-7" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-8">Contact</label>
            <input type="text" name="s-con" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-9">Date of Birth</label>
            <input type="text" name="s-birth" class="form-control form-control-rounded" id="input-9" placeholder="Enter Password">
           </div>
          
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <input type="submit" name="t-btn" type="submit" value="Insert"  class="btn btn-light btn-round px-5 form-control">
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
<?php
include("connect.php");
  if(isset($_POST['t-btn']))
  {
    $name=$_POST['s-name'];
    $contact=$_POST['s-con'];
    $batchId=$_POST['s-batch'];
    $email=$_POST['s-email'];
    $dateofbirth=$_POST['s-birth'];

   // $q="insert into teacher values('$name','$contact','$salary','$qualiication')";
  $q="INSERT INTO `teacher`( `TeacherName`, `Tcontact`, `Salary`, `Qualification`) VALUES ('$name','$contact','$salary','$qualiication')";
    $r=mysqli_query($conn,$q);

    if($r!=null)
    {
    echo '<script>alert("Record Inserted!");</script>';

    }
    else
    {

      echo mysqli_error();
      //use to check error
    }

  }





?>