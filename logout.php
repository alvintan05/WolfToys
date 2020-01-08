<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
	echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>