<?php
require_once('database.php');
$data=tampildata_user('user');
$nomor=0;
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
 
  <?php include("nav.php");?>
<div class="container">
  <center><h1>DAFTAR USER</h1></center> 
   <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">No_identitas</th>
      <th scope="col">Nama</th>
      <th scope="col">Status</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Note</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item) : ?>
        <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['no_identitas']; ?></td>
      <td><?php echo $item['nama']; ?></td>
      <td><?php echo $item['status']; ?></td>
      <td><?php echo $item['username']; ?></td>
      <td><?php echo $item['password']; ?></td>
      <td><?php echo $item['note']; ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>