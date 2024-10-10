<?php
include 'configure.php';

//delete for admin
$id = $_GET['adminid'];
$query = "DELETE FROM `admin_db` WHERE id = $id";
$run = mysqli_query($conn, $query);

if ($run) {
	echo "<script>alert('Admin Has Been Deleted!!');window.location.href='adminlist.php';</script>";
} else {
	echo "<script>alert('somthing went wrong!!'); window.location.href='adminlist.php';</script>";
}

//delete for user
$id = $_GET['usernameid'];
$insert = "DELETE FROM `user_db` WHERE id = $id";
$result = mysqli_query($conn, $insert);

if ($run) {
	echo "<script>alert('User Has Been Deleted!!');window.location.href='userlist.php';</script>";
} else {
	echo "<script>alert('somthing went wrong!!'); window.location.href='userlist.php';</script>";
}
