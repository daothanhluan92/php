<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	include 'connect.php';
	$take_info = "select * from user where email='$email' and password='$password'";
	$sql = mysqli_query($log_sql,$take_info);
	$result = mysqli_fetch_array($sql);
	if (mysqli_num_rows($sql) == 1) {
		$_SESSION['name'] = $result['name'];
		$_SESSION['phone'] = $result['phone'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['address'] = $result['address'];
		header('location:home.php');
		mysqli_close($log_sql);
		exit();
	}
	else {
		header('location:login.php?error=Login failed');
		mysqli_close($log_sql);
		exit();
	}
