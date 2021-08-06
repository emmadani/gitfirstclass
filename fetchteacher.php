<?php 
include('header.php');
//End topbar header


include('connect.php');
 /* $q="select * from teacher";
  $r=mysqli_query($conn,$q);
*/
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

  $q="select * from teacher where TeacherName='$srch'";




}


else{

 $q="select * from teacher ";


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
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Qualification</th>
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
                    <td scope="row"><?php echo $row['TeacherId'] ?></td>
                    <td scope="row"><?php echo $row['TeacherName'] ?></td>
                         <td scope="row"><?php echo $row['Tcontact'] ?></td>
                       <td scope="row"><?php echo $row['Salary'] ?></td>
                            <td scope="row"><?php echo $row['Qualification'] ?></td>
                              <td scope="row"><a href="updateteacher.php?Id=<?php echo $row['TeacherId'] ?>"><img src="edit.gif" height="30" ></td></a>
                              <td scope="row">
  <button onclick="abc(<?php echo $row['TeacherId'] ?>)"><img src="delete.gif" height="30"></button>
                              </td>


                            
                                 
                
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
                                  location.href="deleteTeacher.php?id="+Id;
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
