<?php  
	include 'koneksi.php';
	session_start();

	$id = $_SESSION['id'];
	$nama = $_GET['nama'];
	$nomor = $_GET['nomor'];
	$umur = $_GET['umur'];
	$alamat = $_GET['alamat'];
	$email = $_GET['email'];

	$query = "UPDATE tb_user SET nama='$nama', no_hp='$nomor', umur='$umur', alamat='$alamat', email='$email' WHERE id_user='$id'";
	$result = mysqli_query($koneksi, $query);

	if($result){
        echo '<script type="text/javascript">
                alert("Edit Profile Berhasil");
            </script>';
    }else{
        echo '<script type="text/javascript">
                alert("Gagal Edit Profile");
            </script>';
    }

    header("location:profile.php");
?>