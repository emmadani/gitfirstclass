<?php
include('connect.php');
	if(isset($_GET['id']))
	{

		$id=$_GET['id'];
		$q="delete from teacher where TeacherId='$id'";
	$result=mysqli_query($conn,$q);
		if($result)
		{
			echo '<script>alert("Record Deleted!");
			window.location.href="fetchteacher.php"
			</script>';
			

		}
		else
		{
			echo mysqli_error($conn);
		}

	}

?>