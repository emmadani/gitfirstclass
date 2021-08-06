<?php
include('connect.php');
	if(isset($_GET['id']))
	{

		$id=$_GET['Id'];
		$q="delete from course_outline where CourseId='$id'";
	$result=mysqli_query($conn,$q);
		if($result)
		{
			echo '<script>alert("Record Deleted!");
			window.location.href="fetchcourse.php"
			</script>';
			

		}
		else
		{
			echo mysqli_error($conn);
		}

	}

?>