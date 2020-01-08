<?php  

	session_start();

	include 'koneksi.php';

	$id = $_SESSION['id'];

	$query = "SELECT * FROM tb_user WHERE id_user='$id'";
	$result = mysqli_query($koneksi, $query);

	$data = mysqli_fetch_array($result);

	$nama = $data['nama'];	
	$no_hp = $data['no_hp'];
	$email = $data['email'];
	$umur = $data['umur'];
	$alamat = $data['alamat'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Profile</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">		
	<link rel="shortcut icon" type="image/ico" href="assets/favicon/wolf.ico">
</head>
<body style="background-image: url('assets/images/background.jpg');">

	<div id="page-container">	
	
		<!-- Navigation bar -->
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
			          <a class="nav-link" href="product.php">Product</a>
			        </li>
			        <li class="nav-item">
			          <a class="nav-link" href="wishlist.php">Wishlist</a>
			        </li>
			      </ul>	      

			      <ul class="navbar-nav ml-auto">
			      	<li class="nav-item dropdown">
			      		<a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#">My Account</a>
			      		<div class="dropdown-menu">
			      			<a class="dropdown-item" href="#">Profile</a>
			      			<a class="dropdown-item" href="logout.php">Sign Out</a>
			      		</div>
			      	</li>
			      </ul>
			   </div>
		   </div>
		</nav>

		<br>
		
		<!-- Card data profile -->
		<div class="container" id="page-container">
			<div class="row">
				<div class="container col-md-12 col-sm-12">			
					<div class="card mb-3">			
						<div class="card-body border-secondary">						

							<center>
								<h3>PROFILE</h3>
							</center>

							<form action="" method="POST">
								<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" value="<?php echo"$nama" ?>" required>
								</div>

								<div class="form-group">
									<label for="nomor">Nomor Telepon</label>
									<input type="text" id="nomor" name="nomor" class="form-control" placeholder="Masukkan nomor telepon" value="<?php echo"$no_hp" ?>" required>		
								</div>

								<div class="form-group">
									<label for="umur">Umur</label>
									<input type="number" id="umur" name="umur" class="form-control" placeholder="Masukkan Umur" value="<?php echo"$umur" ?>" >		
								</div>

								<div class="form-group">
									<label for="alamat">Alamat</label>
									<input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukkan alamat" value="<?php echo"$alamat" ?>" >		
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" value="<?php echo"$email" ?>" required>		
								</div>
								<br>
								<button type="submit" class="btn btn-primary" onclick="update()" name="save">SAVE</button>
							</form>
							<br>
						</div>				
					</div>
				</div>			
			</div>		
		</div>
	</div>

	<!-- Ajax untuk update data -->
	<script>
		var http = false;
		if(window.XMLHttpRequest){
				http = new XMLHttpRequest();
		}else if(window.ActiveXObject){
				http = new ActiveXObject("Microsoft.XMLHTTP");
		}

		function update(){
				http.responseText;
				http.abort();
				http.onreadystatechange = function(){
					if(http.readyState == 4){
						document.getElementById("page-container").innerHTML = this.responseText;
					}
				}

				var nama = document.getElementById('nama').value;
				var nomor = document.getElementById('nomor').value;
				var umur = document.getElementById('umur').value;
				var alamat = document.getElementById('alamat').value;				
				var email = document.getElementById('email').value;

				var url = "http://localhost/WolfToys/update_profile.php?nama="+nama+"&nomor="+nomor+"&umur="+umur+"&alamat="+alamat+"&email="+email;
				http.open("GET", url, true); 
				http.send();
		}			
	</script>

	<script src="assets/js/jquery.js"></script> 
	<script src="assets/js/popper.js"></script> 
	<script src="assets/js/bootstrap.js"></script>

	<script type="text/javascript">
    	jQuery(document).ready(function(){
    		jQuery("#open-menu").click(function(){
    			if(jQuery('#page-container').hasClass('show-menu')){
    			jQuery("#page-container").removeClass('show-menu');
    		}
    			
    			else{
    			jQuery("#page-container").addClass('show-menu');
    			}
    		});
    	});
    </script>	
	
</body>
</html>