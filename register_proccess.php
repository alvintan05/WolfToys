<?php  
	include 'koneksi.php';

	if (isset($_POST['register'])) {

		session_start();

		$nama = $_POST['nama'];
		$nomor = $_POST['nomor'];
		$email = $_POST['email'];
		$password = $_POST['password'];	

		$query = "INSERT INTO tb_user(nama, no_hp, email, password) VALUES('$nama','$nomor','$email','$password')";	

		if ($_SESSION["Captcha"] != $_POST['nilaiCaptcha']){
			echo "<b>Captcha Salah</b>";
		}else{		
			$result = mysqli_query($koneksi, $query);
			header("location:register_success.php");
		}
	}
?>