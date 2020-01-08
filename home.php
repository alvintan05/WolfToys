<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">	
	<link rel="shortcut icon" type="image/ico" href="assets/favicon/wolf.ico">
</head>

<body style="background-image: url('assets/images/background.jpg'); color: white;">
	
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7b5242;">

		<div class="container col-md-10">

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
		          <a class="nav-link active" href="#">Home</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link" href="product.php">Product</a>
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

	<div class="jumbotron jumbotron-fluid" style="background-color: transparent;">
		<div class="container col-md-10 col-sm-12">
			<h3 class="display-3">Welcome to Wolf Toys</h3>
			
			<p>Temukan Figure Berkualitas dan Berkelas</p>

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			
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
		</div>							
	</div>

	<div class="container">
		<center>
			<h3>HOT PRODUCTS</h3>
			<br>
		</center>
	</div>


	<div class="container col-md-10 col-sm-12">		
		
		<div class="container">			

			<div class="row">				

				<div class="card-deck">
	<?php  

			include 'koneksi.php';

			$query = "SELECT id_product, url_image FROM tb_product LIMIT 8";

			$result = mysqli_query($koneksi,$query);

			$count = 0;

			while($d = mysqli_fetch_array($result)){ ?>

				<div class="card col-md-3" style="background: url(assets/images/frame_product.png); width:234px; height:428px;" >
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

		<center>
			<br>
			<a href="product.php" class="btn btn-success" type="button">SEE MORE</a>
			<br>
			<br>
		</center>
		
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