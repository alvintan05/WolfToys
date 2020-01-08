<?php  
	include 'koneksi.php';
	session_start();
	
	$id_user = $_SESSION['id'];
	$id_product = $_GET['id_product'];

	$query = "DELETE FROM tb_wishlist WHERE id_user='$id_user' AND id_product='$id_product'";
	$result = mysqli_query($koneksi, $query);

	if($result){
        echo '<script type="text/javascript">
                alert("Berhasil menghapus wishlist");
             </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Gagal menghapus wishlist");
             </script>';
    }

	header("location:product_detail.php");
?>