<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Product</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">		
	<link rel="shortcut icon" type="image/ico" href="assets/favicon/wolf.ico">
</head>
<body style="background-image: url('assets/images/background.jpg'); color: white;">

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

		      <ul class="navbar-nav mr-auto">	        
		        <li class="nav-item">
		          <a class="nav-link" href="home.php">Home</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link active" href="#">Product</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="wishlist.php">Wishlist</a>
		        </li>
		      </ul>	      

		      <ul class="navbar-nav ml-auto">
		      	<li class="nav-item dropdown">
		      		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">My Account</a>
		      		<div class="dropdown-menu">
		      			<a class="dropdown-item" href="profile.php">Profile</a>
		      			<a class="dropdown-item" href="logout.php">Sign Out</a>
		      		</div>
		      	</li>
		      </ul>

		   </div>

	   </div>

	</nav>

	<div class="container">
		<br>
		<center>
			<h3>ALL PRODUCTS</h3>
			<br>
		</center>
	</div>


	<div class="container col-md-10 col-sm-12">		
		
		<div class="container">			

			<div class="row">				

				<div class="card-deck">
				
				<?php  

				include 'koneksi.php';

				$query = "SELECT id_product, url_image FROM tb_product";

				$result = mysqli_query($koneksi,$query);

				$count = 0;			

				while($d = mysqli_fetch_array($result)){ ?>
				
				
					<div class="card col-md-3" style="background: url(assets/images/frame_product.png); min-width:234px; min-height:428px;" >
						<a href="product_detail.php?id=<?php echo $d['id_product'] ?>">
							<div class="thumbnail" style="margin-top:13px; margin-bottom:13px;">					
								<img src="<?php echo $d['url_image'] ?>" class="card-img-top" alt="..." width="208" height="400">
							</div>
						</a>							
					</div>						

				<?php 
				$count++;
				if ($count%4 == 0) {
					echo "</div> </div> <br> <div class=\"row\"> <div class=\"card-deck\">";	
				} 
				
			}
				
	?>						
			</div>
				
			</div>
			
		</div>

		<br>
		
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