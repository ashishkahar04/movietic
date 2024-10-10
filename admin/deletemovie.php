<?php
include 'configure.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM `movie_dbs` WHERE id=$id";
	$run = mysqli_query($conn,$query);
	if ($run) {
		header('location:movielist.php');
	}
	else{
		echo "<script>alert('Something went Wrong!!');window.location.href='movielist.php';</script>";
	}
}
else{
	header('location:movielist.php');
}


?>