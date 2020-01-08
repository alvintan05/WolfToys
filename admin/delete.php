<?php  
	include '../koneksi.php';
	
	$id = $_GET['id_product'];	

	$query = "DELETE FROM tb_product WHERE id_product='$id'";
	$result = mysqli_query($koneksi, $query);

	if($result){
        echo '<script type="text/javascript">
                alert("Berhasil menghapus data");
             </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Gagal menghapus data");
             </script>';
    }

    $file = "product.json";
    $product = file_get_contents($file);
    $data = json_decode($product, true);

    foreach($data as $key => $d){

        if($d['id_product'] === $id){
            array_splice($data, $key, 1);
        }
    
        $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('product.json',$jsonfile);
       
    }

	header("location:all_data.php");
?>