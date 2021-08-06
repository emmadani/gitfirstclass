<?php 
include('header.php');

include('connect.php');

$id=$_GET['Id'];
    $q="select * course_outline where CourseId='$id'";
  $result=mysqli_query($conn,$q);
  //for column fetching
  $data=mysqli_fetch_assoc($result);

?>
<!--End topbar header-->

	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
    
         
   

      <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Course Update</div>
           <hr>
            <form action="" method="POST">
           <div class="form-group">
            <label for="input-6"> Name</label>
            <input type="text" name="c-name" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name" value=" <?php echo $data['Outline'] ?>">
           </div>
           
           <div class="form-group">
            <label for="input-8">Curriculum Id</label>
            <input type="text" name="currId" class="form-control form-control-rounded" id="input-8" placeholder="Enter Your Mobile Number" value=" <?php echo $data['Curriculum_Id'] ?>">
           </div>
           <div class="form-group">
            <label for="input-9">Image</label>
            <input type="text" name="img" class="form-control form-control-rounded" id="input-9" placeholder="Insert Salary" value=" <?php echo $data['Image'] ?>">
           </div>
            
          
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <input type="submit" name="t-btn" type="submit" value="Update"  class="btn btn-light btn-round px-5 form-control">
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

  if(isset($_POST['t-btn']))
  {
    $name=$_POST['c-name'];
    $curriculum=$_POST['currId'];
    $image=$_POST['img'];
    

   // $q="insert into teacher values('$name','$contact','$salary','$qualiication')";
   
    $q1="UPDATE `course_outline` SET `Outline`='$name',`Curriculum_Id`='$curriculum',`Image`='$image' WHERE CourseId='$id' ";
  
  
    $r=mysqli_query($conn,$q1);

    if($r!=null)
    {
    echo '<script>alert("Record Updated!");
    window.location.href="fetchcourse.php"</script>';

    }
    else
    {

      echo mysqli_error();
      //use to check error
    }

  }





?>