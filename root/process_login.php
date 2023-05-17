<?php 
	$email = $_POST['email'];
	$password = $_POST['password'];
	include '../connect.php';
	$sql = "select * from admin where email='$email' and password='$password'";
	$join = mysqli_query($log_sql,$sql);
	if(mysqli_num_rows($join) ==1){
		header('location:home_root.php');
		mysqli_close($log_sql);
	}
