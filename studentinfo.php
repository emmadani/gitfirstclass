<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php


	include("connect.php");
	session_start();

		if (isset($_SESSION['Admin'])) 
		{
			echo '<h2>Welcome User....'.$_SESSION['Admin'].'</h2>';
			session_destroy();
			  
				
		}





?>
</body>
</html>