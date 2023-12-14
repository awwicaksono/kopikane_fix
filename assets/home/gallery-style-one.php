<?php include('header.php'); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
  </head>
  <body>
    <?php
      require_once 'connect-gallery.php'; // Koneksi ke database

      /**
       * Cegah akses ke halaman login saat sedang login.
       */
      if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
        header('location: /');
      }

      if(isset($_POST['submit'])) {
        /**
         * Mendapatkan data dari formulir pendaftaran.
         * Data: Email, Kata Sandi, Nama Lengkap, dan NIM.
         */
        $name     = strip_tags($_POST['name']);
        $email    = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);
        

        if(empty($name) || empty($email) || empty($password)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi data yang diperlukan.';
        } elseif(count((array) $connect->query('SELECT email FROM admin WHERE email = "'.$email.'" ')->fetch_array()) > 1) {
          /**
           * Cek jika email atau NIM telah terdaftar.
           */
          echo '<b>Warning!</b> Email atau NIM telah terdaftar.';
        } else {
          /**
           * Memasukkan data ke database.
           */
          $insert = $connect->query('INSERT INTO `admin`(`email`, `password`, `name`) VALUES("'.$email.'", "'.$password.'", "'.$name.'")');
          if($insert) {
            echo 'Pendaftaran berhasil!';
          } else {
            echo 'Pendaftaran gagal!';
          }
        }
      }
    ?>
    <form method="POST">
      <input type="text" name="email" value="" autocomplete="off" placeholder="Email">
      <br/>
      <input type="password" name="password" value="" autocomplete="off" placeholder="Kata sandi">
      <br/>
      <input type="text" name="name" value="" autocomplete="off" placeholder="User Name">
      <br/>
      <input type="submit" name="submit" value="Register">
    </form>
  </body>
</html>
   


	
	<?php include("footer.php"); ?>