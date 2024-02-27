<?php
require_once('database.php');
$data=getalldata('barang');
$nomor=0;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>peminjaman</title>
</head>

<body> 
     <?php
    session_start();
    if($_SESSION['status']!="login"){
        header("location:log.php?msg=belum_login");
    }
    ?>
  
<?php include("nav.php")?>

    <div class="container">
  <center><h1>DAFTAR BARANG</h1></center> 
   <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori Barang</th>
      <th scope="col">Merk</th>
    <th scope="col">Jumlah</th>
     <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item) : ?>
        <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['kode_barang']; ?></td>
      <td><?php echo $item['nama_barang']; ?></td>
      <td><?php echo $item['kategori']; ?></td>
      <td><?php echo $item['merk']; ?></td>
      <td><?php echo $item['jumlah']; ?></td>
      <td><?php echo "<a href='edit.php?id=$item[id]'>Edit</a> | <a href='javascript:hapusdata(".$item['id'].")'>Hapus Data</a>";?> </td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
   </div>
   <script language="JavaScript" type="text/javascript">
    function hapusdata(id){
        if (confirm("apakah anda yakin akan menghapus data ini?")){
            window.location.href = 'delete.php?id=' +id;
        }
    }
   </script>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>