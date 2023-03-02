<?php 
session_start();
   
     if (empty($_SESSION['id_petugas'])) {
        echo "<script>alert('Maaf Anda Belum Login');
        window.location.assign('../index2.php');</script>";
     }
      if ($_SESSION['level']!='petugas') {
       echo "<script>alert('Maaf Anda Bukan Sesi Admin');
       window.location.assign('../index2.php');</script>";
     }
  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Petugas . Aplikasi pembayaran SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
     <h3>Aplikasi Pembayaran SPP</h3>
     <div class="alert alert-info">
       Anda Login Sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b> Aplikasi Pembayaran SPP 
     </div>
     <a href="petugas.php" class="btn btn-primary"> Petugas </a>
     <a href="petugas.php?url=pembayaran" class="btn btn-primary"> Pembayaran </a>
     <a href="petugas.php?url=laporan" class="btn btn-primary"> Laporan </a>
     <a href="petugas.php?url=logout" class="btn btn-primary"> Logout </a>
     <div class="card mt-2">
       <div class="card-body">
         <!--ini isi web kita -->
         <?php 
          $file = @$_GET['url'];
          if(empty($file)){
            echo "<h4>Selamat Datang Di HalamanAd Petugas<h4>";
            echo "Aplikasi pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa siswi disekolah.";

          }else{
            include $file. '.php';
          }
          ?>
       </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>