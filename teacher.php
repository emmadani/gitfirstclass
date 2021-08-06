<?php 
include('header.php')?>
<!--End topbar header-->

	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
    
         
   

      <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Teacher Insert</div>
           <hr>
            <form action="" method="POST">
           <div class="form-group">
            <label for="input-6"> Name</label>
            <input type="text" name="t-name" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
           
           <div class="form-group">
            <label for="input-8">Contact</label>
            <input type="text" name="t-con" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number">
           </div>
           <div class="form-group">
            <label for="input-9">Salary</label>
            <input type="text" name="t-sal" class="form-control form-control-rounded" id="input-9" placeholder="Insert Salary">
           </div>
            <div class="form-group">
            <label for="input-8">Qualification</label>
            <input type="text" name="t-qual" class="form-control form-control-rounded" id="input-8" placeholder="Insert Qualification">
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
    $name=$_POST['t-name'];
    $contact=$_POST['t-con'];
    $salary=$_POST['t-sal'];
    $qualiication=$_POST['t-qual'];

   // $q="insert into teacher values('$name','$contact','$salary','$qualiication')";
  $q="INSERT INTO `teacher`( `TeacherName`, `Tcontact`, `Salary`, `Qualification`) VALUES ('$name','$contact','$salary','$qualiication')";
    $r=mysqli_query($conn,$q);

    if($r!=null)
    {
    echo '<script>alert("Record Inserted!")
     window.location.href="fetchteacher.php";</script>';

    }
    else
    {

      echo mysqli_error();
      //use to check error
    }

  }





?>