<?php  

	include 'koneksi.php';
	session_start();

	$id_product = $_GET['id'];
	$id_user = $_SESSION['id'];

	$query = "SELECT * FROM tb_product p JOIN tb_category c ON p.id_category = c.id_category
	WHERE id_product='$id_product'";
	$result = mysqli_query($koneksi, $query);

	$data = mysqli_fetch_array($result);

	$nama = $data['nama'];	
	$img1 = $data['url_image_detail_1'];
	$img2 = $data['url_image_detail_2'];
	$harga = $data['harga'];
	$category = $data['nama_category'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo "$nama"; ?></title>
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

		      <ul class="navbar-nav mr-auto">	        
		        <li class="nav-item">
		          <a class="nav-link" href="home.php">Home</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link active" href="product.php">Product</a>
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

	<br>

	<div class="container">
		<div class="row">
			<div class="container col-md-9 col-sm-12">
				<div class="card mb-3">			
					<div class="card-body border-secondary">						
						<h4><?php echo "$nama"; ?></h4>											
						<p>Category: <?php echo "$category"; ?></p>						
						<div>							
							<center>
								<img width="50%" height="50%" src="<?php echo "$img1"; ?>" alt="">
								<br>
								<br>
								<img width="50%" height="50%" src="<?php echo "$img2"; ?>" alt="">
							</center>
						</div>
						<br>
					</div>				
				</div>
			</div>
			<div class="container col-md-3">
				<div class="card mb-3">			
					<div class="card-body border-secondary">
						
						<div>
							<h4>Harga</h4>
							<p><?php echo "$harga"; ?></p>
						</div>						

						<div >
							<?php  
								$checkStatus = "SELECT * FROM tb_wishlist WHERE id_user='$id_user' AND id_product='$id_product'";
								$hasil = mysqli_query($koneksi, $checkStatus);
								$rec = mysqli_num_rows($hasil);
								$r = mysqli_fetch_array($hasil);

								if ($rec == 0) { ?>
									<a onclick="wishlist()" class="btn btn-warning">				   
									    <img width="15px" height="15px" src="assets/images/love.png" alt="">
									    <span class="align-middle" id="btn-add">Add to Wishlist</span>
									</a>			
								<?php  
								} else { ?>
									<a onclick="remove()" class="btn btn-warning">				   
									    <img width="15px" height="15px" src="assets/images/love.png" alt="">
									    <span class="align-middle" id="btn-remove">Remove from Wishlist</span>
									</a>												
								<?php  } ?>
														
						</div>					
					</div>				
				</div>
			</div>			
		</div>		
	</div>

	<!-- Ajax untuk wishlist -->
	<script>
		var http = false;
		if(window.XMLHttpRequest){
				http = new XMLHttpRequest();
		}else if(window.ActiveXObject){
				http = new ActiveXObject("Microsoft.XMLHTTP");
		}

		function wishlist(){
				http.responseText;
				http.abort();
				http.onreadystatechange = function(){
					if(http.readyState == 4){
						document.getElementById("btn-add").innerHTML = "Remove from Wishlist";						
					}
				}

				var id_product = <?php echo "$id_product"; ?>

				var url = "http://localhost/WolfToys/wishlist_proccess.php?id_product="+id_product;
				http.open("GET", url, true); 
				http.send();
		}			
	</script>

	<!-- Ajax untuk remove wishlist-->
	<script>
		var http = false;
		if(window.XMLHttpRequest){
				http = new XMLHttpRequest();
		}else if(window.ActiveXObject){
				http = new ActiveXObject("Microsoft.XMLHTTP");
		}

		function remove(){
				http.responseText;
				http.abort();
				http.onreadystatechange = function(){
					if(http.readyState == 4){
						document.getElementById("btn-remove").innerHTML = "Add to Wishlist";				
					}
				}
			
				var id_product = <?php echo "$id_product"; ?>

				var url = "http://localhost/WolfToys/remove_wishlist.php?id_product="+id_product;
				http.open("GET", url, true); 
				http.send();
		}			
	</script>

	
	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

</body>
</html>