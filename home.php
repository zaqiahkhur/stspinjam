<?php
require_once('database.php');
$barang=jumlah();
$peminjam=jumlahpinjam();
$user=jumlahUser();
$pinjam=barangTerbanyakdiPinjam();
// $GetCoba1=cobaGet1();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:log.php?msg=belum_login");
      
      }
    ?>
<?php include ("nav.php");?>


      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <center><h1 class="display-4 ">SELAMAT DATANG</h1>
        <p class="lead">Admin peminjaman SMK BAKTI NUSANTARA 666</p>
        </div>
      </div>

      <div class="container mt=-5">

        <div class="row text-center">
          <div class="col-md-4">
          <div class="card" style="width: 18rem;margin-bottom:15px">
            <div class="card-body">

            <h5 class="card-title">Data Barang</h5>
            <h4><?=$barang['jumlah'] ?></h4>
            <p class="card-text">Jumlah barang saat ini</p>
            <a href="barang.php" class="card-link">Lihat data barang</a>
            </div>
         </div>
        </div>
         <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Data User</h5>
             <h4><?=$user['jumlah'] ?></h4>
            <p class="card-text">Jumlah User saat ini</p>
            <a href="user.php" class="card-link">Lihat data User</a>
            </div>
         </div>
        </div>
         <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Data Peminjaman</h5>
             <h4><?=$peminjam['jumlah'] ?></h4>
            <p class="card-text">Jumlah peminjaman saat ini</p>
            <a href="peminjaman.php" class="card-link">Lihat data peminjaman</a>
            </div>
         </div>
        </div>
         <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">Banyak Barang di Pinjam </h5>
             <h4><?=$pinjam['nama']  ?></h4>
             <p>Jumlah paling banyak di pinjam saat ini</p>
            <a href="peminjaman.php" class="card-link">Lihat data peminjaman</a>
            </div>
         </div>
        </div>
      </div>


     </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>