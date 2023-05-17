<?php 
	if(isset($_GET['error'])){
		$error = $_GET['error'];
?>	
	<span style="color: red;"><?php echo $error; ?></span>	
<?php } ?>

<form method="post" action="process_login.php">
	Email
	<input type="text" name="email">
	<br>
	Password
	<input type="text" name="password">
	<br>
	<button>Login</button>
</form>