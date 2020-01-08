<?php  

	session_start();

	if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    	header("location:home.php");    	
  	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Admin</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">	
	<link rel="shortcut icon" type="image/ico" href="../assets/favicon/wolf.ico">
</head>
<body style="background-image: url('../assets/images/background.jpg');">
	<br>
	<div class="container col-md-6 col-sm-12">

		<div class="card mb-3">
			<div class="card-header text-white mb-3" style="background-color: #4d291b;">
				<center>
					<h2>Sign in to Wolf Toys</h2>
				</center>	
			</div>

			<div class="card-body border-secondary">
				<form action="login.php" method="POST">

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
					</div>			

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password" required>		
					</div>					

					<div class="form-group">
						<label for="captcha">Masukkan Captcha</label> 						
						<br>
						<input type="number" class="form-control" id="captcha" placeholder="Masukkan captcha" name="captcha" maxlength="6" required>
						<br>
						<img src="../gambar.php" alt="gambar">									
					</div>

					<button type="submit" class="btn btn-primary">Sign In</button>
				</form>			
			</div>				
		</div>

		<script src="../assets/js/jquery.js"></script> 
		<script src="../assets/js/popper.js"></script> 
		<script src="../assets/js/bootstrap.js"></script>

</body>
</html>