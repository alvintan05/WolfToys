<?php  
	include 'koneksi.php';
	session_start();
	
	$id = $_GET['id_wishlist'];	

	$query = "DELETE FROM tb_wishlist WHERE id_wishlist='$id'";
	$result = mysqli_query($koneksi, $query);

	if($result){
        echo '<script type="text/javascript">
                alert("Berhasil menghapus wishlist");
             </script>';
    }else{
        echo 'Gagal';
    }

	header("location:wishlist.php");
?>