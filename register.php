<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login to your account</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="shortcut icon" type="image/ico" href="assets/favicon/wolf.ico">
</head>
<body style="background-image: url('assets/images/background.jpg');">

	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7b5242;">

		<div class="container">

		    <a class="navbar-brand" href="index.php">
				<img src="assets/images/icon.png" alt="" width="30" height="30" class="d-inline-block align-top">
		    	Wolf Toys
		    </a>

		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">

		      <ul class="navbar-nav ml-auto">	        
		        <li class="nav-item">
		          <a class="nav-link" href="index.php">Sign In</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link active" href="#">Sign Up</a>
		        </li>
		      </ul>	      

		   </div>

	   </div>

	</nav>

	<br>

	<div class="container col-md-6 col-sm-12">

		<div class="card border-secondary mb-3">
			<div class="card-header text-white mb-3" style="background-color: #4d291b;">
				<center>
					<h2>Create your account</h2>
				</center>	
			</div>

			<div class="card-body">
				<form action="register_proccess.php" method="POST">

				<div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
				</div>

				<div class="form-group">
					<label for="nomor">Nomor Telepon</label>
					<input type="text" id="nomor" name="nomor" class="form-control" placeholder="Masukkan nomor telepon" required>		
				</div>

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
					<img src="gambar.php" alt="gambar">						
					<br>
					<br>
					<input type="number" class="form-control" id="captcha" name="nilaiCaptcha" maxlength="6" required>
				</div>

				<button type="submit" class="btn btn-primary" name="register">Sign Up</button>
			</form>			
		</div>	
	</div>			

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

</body>
</html>