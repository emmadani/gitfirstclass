<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

session_start();
include('connect.php');


  if(isset($_POST['submit']))
  {
    $un=$_POST['txtun'];
    $pw=$_POST['txtpw'];

    $q="SELECT * FROM `student` WHERE  Email='$un' && Password='$pw' ";
    $r=mysqli_query($conn,$q);
   
    if(mysqli_num_rows($r)!=0)
    {
      $_SESSION['Admin']= $un;
     echo"<script>alert('Login successful');window.location.href='studentinfo.php'</script>";

    }

else{
  echo"<script>alert('Login Failed')</script>";
}


  }
	
?>



<form method="post" name="form1">
	<table>
		<tr>
			<td>Username</td>
			<td><input type="text" name="txtun" /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="txtpw" /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Login" /></td>
		</tr>
	</table>
</form>
</body>
</html>