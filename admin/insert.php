<?php  

	include '../koneksi.php';

	$nama = $_POST['nama'];
	$harga = "Rp".$_POST['harga'];
	$cover = $_POST['cover'];
	$detail1 = $_POST['detail1'];
	$detail2 = $_POST['detail2'];
	$kategori = $_POST['category'];

	$query = "INSERT INTO tb_product (nama, harga, url_image, url_image_detail_1, url_image_detail_2, id_category) VALUES ('$nama', '$harga', '$cover', '$detail1', '$detail2', '$kategori')";
	$result = mysqli_query($koneksi, $query);

	$id = mysqli_insert_id($koneksi);

	$file = "product.json";
    $product = file_get_contents($file);
    $data = json_decode($product, true);

    $data[] = array(
    	'id_product' => $id,
        'nama' => $nama,
        'harga' => $harga,
        'url_image' => $cover,
        'url_image_detail_1'  => $detail1,
        'url_image_detail_2' => $detail2,
        'id_category' => $kategori
    );
    

    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('product.json',$jsonfile);

	header("location:home.php");

?>