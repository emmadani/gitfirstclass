<?php 
include('header.php');
//End topbar header


include('connect.php');
  $q="select * from `curriculum`";
  $rows=mysqli_query($conn,$q);

?>  


	
  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
    
         
   

      <div class="col-lg-12">
        <div class="card">
           <div class="card-body">
           <div class="card-title">Course Form</div>
           <hr>
            <form action="" method="POST" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-6">Course Name</label>
            <input type="text" name="txtName" class="form-control form-control-rounded" id="input-6" placeholder="Enter Your Name">
           </div>
           <div class="form-group">
            <label for="input-7">Curriculum ID</label>
            <select type="text" name="txtCid" class="form-control form-control-rounded" id="input-7" placeholder="Enter Teacher ID" >  
              <?php while ($data=mysqli_fetch_assoc($rows)) { ?>
<option value="<?php echo $data['CurriculumId'];  ?>"><?php echo $data['CurriculumName'];  ?></option>



<?php }?>
           
              </select>
           </div>
           <div class="form-group">
            <label for="input-8">Image</label>
          <input type="file" name="image" onchange="readURL(this)" height="50">
<img id="proimg">
<br><br>
           </div>
           
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox2" checked=""/>
            <label for="user-checkbox2">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <input type="submit" name="subbtn" value="Submit" class="btn btn-light btn-round px-5">
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

<script >
  function readURL(input)
  {
    if(input.files && input.files[0])
    {
      var reader=new FileReader();
      reader.onload=function (e) 
      {
        $('#proimg')
        .attr('src',e.target.result)
        .width(250)
        .height(250)
        .css("visibility","visible");
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>


  <?php
 
  if(isset($_POST['subbtn']))
  {
    
    $fname=$_FILES['image']['name'];
    $fSize=$_FILES['image']['size'];
    $fType=$_FILES['image']['type'];
    $fError=$_FILES['image']['error'];
    $fTempName=$_FILES['image']['tmp_name'];
    $folder="myimages/";

   
  $name=$_POST['txtName'];
  $Curr_Id=$_POST['txtCid'];
  
    if ($fType=="image/png" || $fType=="image/jpg" || $fType=="image/jpeg" || $fType=="image/jfif") {
      if ($fSize<=1000000) {
        $path=$folder.$fname;
      $q1="INSERT INTO `course_outline`( `Outline`, `Curriculum_Id`, `Image`) VALUES ('$name',' $Curr_Id','$path') ";
        $result=mysqli_query($conn,$q1);
        move_uploaded_file($fTempName,$path);
        # code...
      
      # code...
   

  
   if($result)
{
echo "<script> alert('Record Inserted'); window.location.href='fetchcourse.php';</script>";
}
else
{
echo mysqli_error($conn);
}
}
else{
echo "<script> alert('Image size error'); window.location.href='fetchcourse.php';</script>";
}
}
else{
echo "<script> alert('Image format error'); window.location.href='fetchcourse.php';</script>";
}
}



?>
</body>
</html>
