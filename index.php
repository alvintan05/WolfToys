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
	<title>Welcome to WolfToys</title>
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
		          <a class="nav-link active" href="#">Sign In</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link" href="register.php">Sign Up</a>
		        </li>
		      </ul>	      

		   </div>

	   </div>

	</nav>

	<div class="jumbotron jumbotron-fluid" style="background-color: transparent;">

		<div class="container">

			<div class="row">

				<div class="container col-md-6 col-sm-12 text-white">
					<h1 class="display-3">Welcome to Wolf Toys</h1>
					<p>Temukan Figure Berkualitas dan Berkelas</p>					

					<div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
					
						<ol class="carousel-indicators">
					    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					    	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>	    
					  	</ol>

					  	<div class="carousel-inner">

						    <div class="carousel-item active">
						    	<img class="d-block w-100" src="assets/images/slider/slide1.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/slider/slide2.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/slider/slide3.jpg" alt="Third slide">
						    </div>			    
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/slider/slide4.jpg" alt="Fourth slide">
						    </div>			    
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/slider/slide8.jpg" alt="Fifth slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/slider/slide6.jpg" alt="Sixth slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="assets/images/slider/slide7.jpg" alt="Seventh slide">
						    </div>
					  	</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						 </a>
					  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Next</span>
					  	</a>

				  	</div>

				  	<br>

				</div>		

				<div class="container col-md-6 col-sm-12">

					<div class="card mb-3">
						<div class="card-header text-white mb-3" style="background-color: #4d291b;">
							<center>
								<h2>Sign in to Wolf Toys</h2>
							</center>	
						</div>

						<div class="card-body border-secondary">
							<form action="login_proccess.php" method="POST">

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
									<img src="gambar.php" alt="gambar">									
								</div>

								<button type="submit" class="btn btn-primary">Sign In</button>
							</form>			
						</div>				
					</div>

					<div class="card border-secondary mb-3">
						<div class="card-body">
							<center>
								New to Wolf Toys?
								<a href="register.php">Create an account.</a>
							</center>				
						</div>
					</div>

				</div>			
			</div>

		</div>
		
	</div>

</div>	

	<footer id="sticky-footer" class="py-1 text-white-50" style="background-color: #280000;">
    	<div class="container text-center">
      		<small>&copy; 2020 Wolf Toys</small>
    	</div>
  	</footer>

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

</body>
</html>