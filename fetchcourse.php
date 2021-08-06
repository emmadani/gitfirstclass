<?php 
include('header.php');
//End topbar header


include('connect.php');


?>	
  <div class="content-wrapper">
    <div class="container-fluid">
      <!--search-->
       <div class="row">
      <div class="col-lg-6">
       <form class="search-bar" action="" method="Post">
        <input type="text" class="form-control" placeholder="Enter keywords" name="search">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
         </div>
         
         <div class="col-lg-6">
 <input type="submit" name="btnsearch" class="btn btn-light btn-round px-5">
 <input type="submit" value="Reset" name="btnreset" class="btn btn-light btn-round px-5">
      </form>
            
    </div>
  </div>

<?php

  if(isset($_POST['btnsearch']))
  {
      $srch=$_POST['search'];

  $q="select * from course_outline where Outline='$srch'";




}


else{

 $q="select * from course_outline ";


}
  $r=mysqli_query($conn,$q);


?>
<!--end search-->


      <div class="row">
        
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Teacher Table</h5>
			  <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Outline</th>
                     <th scope="col">Curriculum ID</th>
                  
                    <th scope="col">Image</th>
                    
                            <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                 <tbody>

<?php
$counter=1;
 while($row=mysqli_fetch_array($r)) { ?>            
                  <tr>
                    <td scope="row"><?php echo $counter++ ?></td>
                   <td scope="row"><?php echo $row['CourseId'] ?></td>
                    <td scope="row"><?php echo $row['Outline'] ?></td>
                     <td scope="row"><?php echo $row['Curriculum_Id'] ?></td>

                      <td scope="row"><?php echo "<img src='$row[Image]' height=50>" ?></td>
                      <td scope="row"><a href="updatecourse.php?Id=<?php echo $row['CourseId'] ?>"><img src="edit.gif" height="30" ></td></a>
                              <td scope="row">
  <button onclick="abc(<?php echo $row['CourseId'] ?>)"><img src="delete.gif" height="30"></button>
                              </td>
                         
                      
                  
                   <!--<?php echo "<td><img src='$row[Image]' height=50></td>"?>-->
                              


                            
                                 
                
                  </tr>
                <?php  }?>
                <!--$counter++ we can take here-->

                </tbody>
              </table>
            </div>
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
    <script>
      function abc(Id){
         var ans=confirm("Do you want to delete it??");
                                if (ans==true) {
                                  location.href="deleteCourse.php?id="+Id;
                                }

                              else{
                                return true;
                              }
                            }

                              </script>
      
                               
 <?php 
include('footer.php')?>
	
</body>
</html>
