<?php  
	include 'koneksi.php';
	session_start();

	$id_user = $_SESSION['id'];	

	$select = "SELECT * FROM tb_wishlist w JOIN tb_product p ON w.id_product=p.id_product WHERE id_user='$id_user'";
	$result = mysqli_query($koneksi, $select);

	$rec = mysqli_num_rows($result);	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Wishlist</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">		
	<link rel="shortcut icon" type="image/ico" href="assets/favicon/wolf.ico">	
</head>
<body style="background-image: url('assets/images/background.jpg');" id="page-container">

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
		          <a class="nav-link active" href="#">Wishlist</a>
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
			<div class="container col-md-12 col-sm-12">
				<div class="card mb-3">			
					<div class="card-body border-secondary">						
						<h3>Total Wishlist : <?php echo "$rec"; ?></h3>

						<div class="container">
						<div class="row">				

							<div class="card-deck">
							<?php  			

							$count = 0;																	

							while($d = mysqli_fetch_array($result)){ ?>
								
								
									<div class="card col-md-3" style="background: url(assets/images/frame_product.png) no-repeat ; min-width:234px; min-height:475px; background-color: #7b5242" >
										<a href="product_detail.php?id=<?php echo $d['id_product'] ?>">
											<div class="thumbnail" style="margin-top:13px; margin-bottom:13px;">					
												<img src="<?php echo $d['url_image'] ?>" class="card-img-top" alt="..." width="208" height="400">
											</div>											
										</a>										
										<button id="btn-remove" class="btn btn-outline-danger" onclick="remove(<?php echo $d['id_wishlist'] ?>)" style="margin-top:5px; color: #fff;">
											Remove from Wishlist
										</button>				
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

				var url = "http://localhost/WolfToys/remove_wish.php?id_wishlist="+id;
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