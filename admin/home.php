<?php 
	include '../koneksi.php';
	session_start();

	$id = $_SESSION['id'];

	$query = "SELECT nama FROM tb_admin WHERE id_admin='$id'";
	$result = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_array($result);

	$nama = "Admin ".$row['nama'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home Admin</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">	
	<link rel="shortcut icon" type="image/ico" href="../assets/favicon/wolf.ico">
</head>
<body style="background-image: url('../assets/images/background.jpg');">
	
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7b5242;">

		<div class="container col-md-11">

		    <a class="navbar-brand" href="index.php">
				<img src="../assets/images/icon.png" alt="" width="30" height="30" class="d-inline-block align-top">
		    	Wolf Toys
		    </a>

		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarSupportedContent">

		      <ul class="navbar-nav mr-auto">	        
		        <li class="nav-item">
		          <a class="nav-link active" href="#">Tambah Data</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link" href="all_data.php">Lihat Data</a>
		        </li>		        
		      </ul>	      

		      <ul class="navbar-nav ml-auto">
		      	<li class="nav-item dropdown">
		      		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo "$nama"; ?></a>
		      		<div class="dropdown-menu">		      			
		      			<a class="dropdown-item" href="logout.php">Sign Out</a>
		      		</div>
		      	</li>
		      </ul>
		   </div>
	   </div>
	</nav>

	<br>
	
	<div class="container" id="page-container">
		<div class="row">
			<div class="container col-md-12 col-sm-12">			
				<div class="card mb-3">			
					<div class="card-body border-secondary">						

						<center>
							<h3>Tambah Data</h3>
						</center>

						<form action="insert.php" method="POST">
							<div class="form-group">
								<label for="nama">Nama Produk</label>
								<input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
							</div>

							<div class="form-group">
								<label for="hargaharga">Harga Produk</label>
								<input type="text" id="harga" name="harga" class="form-control" placeholder="Masukkan harga produk" required>		
							</div>

							<div class="form-group">
								<label for="cover">Url Image Cover</label>
								<input type="text" id="cover" name="cover" class="form-control">		
							</div>

							<div class="form-group">
								<label for="detail1">Url Image Detail 1</label>
								<input type="text" id="detail1" name="detail1" class="form-control">		
							</div>

							<div class="form-group">
								<label for="detail2">Url Image Detail 2</label>
								<input type="text" id="detail2" name="detail2" class="form-control" required>		
							</div>						
							<div class="form-group">
								<label for="category">Kategori</label>
								<select class="form-control" name="category">
									<option value="1">Marvel</option>
									<option value="2">Cosbaby</option>
									<option value="5">Star Wars</option>
									<option value="6">DC</option>									
								</select>
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




	<script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>

</body>
</html>