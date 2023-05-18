<?php
	session_start();
	include '../connect.php';
	if (!empty($_SESSION['id'])) {
		$id = $_SESSION['id'];
		$product_id = $_SESSION['cart'][$id]['id'];
		$sql = "insert into order_product(user_id,product_id) values('$id','$product_id')";
		mysqli_query($log_sql,$sql);
	}
	else{
		echo 1;
		exit();
	}
?>