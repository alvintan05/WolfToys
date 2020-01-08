<?php  
	include 'koneksi.php';
	session_start();

	$id_user = $_SESSION['id'];
	$id_product = $_GET['id_product'];

	$query = "INSERT INTO tb_wishlist (id_user, id_product) VALUES ('$id_user','$id_product')";
	$result = mysqli_query($koneksi, $query);

	if($result){
        echo '<script type="text/javascript">
                alert("Berhasil menambah wishlist");
             </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Gagal menambah wishlist");
             </script>';
    }

	header("location:product_detail.php");
?>