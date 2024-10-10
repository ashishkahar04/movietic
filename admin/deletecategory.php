<?php 
include 'configure.php';

$id = $_GET['deleteid'];

$query = "DELETE FROM `category` WHERE id =$id";

$run = mysqli_query($conn,$query);

if ($run) {
	echo "<script>alert('Deleted Successfully!!');window.location.href='categorylist.php';</script>";
}
else{
	echo "<script>alert('somthing went wrong!!'); window.location.href='categorylist.php';</script>";
}

 ?>