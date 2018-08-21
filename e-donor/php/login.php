<?php include 'connection.php'; ?>
<?php include 'navbar.php'; ?>
<title>e-donor | Login</title>
<link rel="stylesheet" type="text/css" href="../css/loginform.css">
	<div class="header">
		<h2>Login</h2>
	</div> 

<form method="post">
		<!-- Display the error messages here-->
			<?php include('errors.php'); ?>

	<div class="form-group">
		<label><h4>Username</h4></label>
		<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
		<span class="error">* <?php echo $usernameErr;?></span>
	</div>
	
	<div class="form-group">
		<label><h4>Password</h4></label>
		<input type="password" class="form-control" name="password">
	</div>
	
	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>
	</div>
	<hr class="text-center" width="100%">
	<h5>Don't have an account yet? <a href="../index.php">Register With Us</a></h5>
</form>
