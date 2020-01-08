<?php
  
  session_start(); 

  include 'koneksi.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM tb_user WHERE email='$email' AND password='$password'";
  $result = mysqli_query($koneksi, $query);

  $rec = mysqli_num_rows($result);  

  if ($_SESSION["Captcha"]!=$_POST['captcha']){
     echo '<script type="text/javascript">
                alert("captcha Tidak Sama!");
            </script>';
  }else{
    if ($rec == 0) {
      echo "<b>Username atau password salah</b>";
    }else{
      $data = mysqli_fetch_array($result);
      $_SESSION['email'] = $email;
      $_SESSION['password'] = $password;
      $_SESSION['id'] = $data['id_user'];
      echo "<script>alert('{$_SESSION['id']}')</script>";
      header("location:home.php");
    }
  }
?>