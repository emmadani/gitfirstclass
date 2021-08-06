<?php


$username='root';
$hostname='localhost';
$password='';
$dbName='learning_management';

 $conn=mysqli_connect($hostname,$username,$password,$dbName);


if($conn===false)
{

	echo '<script>alert("Error in Connection");</script>';
}










?>