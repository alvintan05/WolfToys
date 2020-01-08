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
	<title>All Data</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.css">	
	<link rel="shortcut icon" type="image/ico" href="../assets/favicon/wolf.ico">
</head>
<body style="background-image: url('../assets/images/background.jpg');" id="page-container">
	
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
		          <a class="nav-link" href="home.php">Tambah Data</a>
		        </li>	        
		        <li class="nav-item">
		          <a class="nav-link active" href="#">Lihat Data</a>
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
			<div class="">			
				<div class="card mb-3">			
					<div class="card-body border-secondary">						
						
						<h3>Semua Data</h3>						

						<button class="btn btn-primary">Export JSON</button>

						<br>
						<br>
						
						<table class="table table-bordered">
							<thead style="background-color: #16A085 ; color: #FFFFFF">
						    <tr>
						      <th scope="col">Id</th>
						      <th scope="col">Nama</th>		    
						      <th scope="col">Harga</th>
						      <th scope="col">Image Cover</th>
						      <th scope="col">Image Detail 1</th>
						      <th scope="col">Image Detail 2</th>
						      <th scope="col">Id Category</th>
						      <th scope="col">Category</th>						      
						      <th scope="col">Action</th>
						    </tr>
						  </thead>
						  <tbody>		    

						    <?php  														

								$query1 = "SELECT * FROM tb_product p JOIN tb_category c ON p.id_category=c.id_category ORDER BY p.id_product ASC";
								$data = mysqli_query($koneksi, $query1);

								$array = array();

								while ($d = mysqli_fetch_array($data)) {
									$array[] = $d;
									?>
									<tr>
										<td><?php echo $d['id_product'] ?></td>					
										<td><?php echo $d['nama'] ?></td>
										<td><?php echo $d['harga'] ?></td>
										<td>											
											<img src="<?php echo $d['url_image'] ?>" alt="" style="width: 100px; height: 150px;">					
										</td>
										<td>											
											<img src="<?php echo $d['url_image_detail_1'] ?>" alt="" style="width: 100px; height: 150px;">				
										</td>
										<td>											
											<img src="<?php echo $d['url_image_detail_2'] ?>" alt="" style="width: 100px; height: 150px;">				
										</td>										
										<td><?php echo $d['id_category'] ?></td>
										<td><?php echo $d['nama_category'] ?></td>									
										<td>											
											<button onclick="remove(<?php echo $d['id_product']; ?>)" class="btn btn-danger" role="button">HAPUS</button>
										</td>
									</tr>									
									<?php  
									$jsonfile = json_encode($d, JSON_PRETTY_PRINT);

									file_put_contents('product.json',$jsonfile);
								}
								?>
							
						  </tbody>
						</table>

					</div>				
				</div>
			</div>			
		</div>		
	</div>

	<!-- Ajax untuk remove wishlist-->
	<script>
		var http = false;
		if(window.XMLHttpRequest){
				http = new XMLHttpRequest();
		}else if(window.ActiveXObject){
				http = new ActiveXObject("Microsoft.XMLHTTP");
		}

		function remove(id){
				http.responseText;
				http.abort();
				http.onreadystatechange = function(){
					if(http.readyState == 4){
						document.getElementById("page-container").innerHTML = this.responseText;					
					}
				}					

				var url = "http://localhost/WolfToys/admin/delete.php?id_product="+id;
				http.open("GET", url, true); 
				http.send();
		}			
	</script>

	<script src="../assets/js/jquery.js"></script> 
	<script src="../assets/js/popper.js"></script> 
	<script src="../assets/js/bootstrap.js"></script>

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