<?php 
include('connect.php');
include('dynamicnavbar.php');
$id=$_GET['Id'];
  $q="select * from teacher where TeacherId='$id'";
  $r=mysqli_query($conn,$q);

?>	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      


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
      

	
</body>
</html>
