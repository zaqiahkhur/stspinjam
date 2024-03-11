<?php
session_start();
require_once('database.php');
$data=getalldata('peminjaman');
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

    <title></title>
</head>

<body> 
     <?php
    if($_SESSION['status']!="login"){
        header("location:log.php?msg=belum_login");
    }
    ?>
  
<?php include("nav.php")?>
<!-- Button trigger modal -->

   <div class="container">
  <center><h1>DAFTAR PEMINJAMAN</h1></center>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add peminjaman
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action = "input_peminjaman.php" method ="post">
 <div class="form-group">
      <label for="tgl_pinjam">Tanggal peminjaman</label>
      <input type="date" class="form-control" name="tgl_pinjam">
    </div>
    <div class="form-group">
      <label for="tgl_kembali">Tanggal Kembali</label>
      <input type='date' class='form-control' name='tgl_kembali' >
    </div>
  <div class="form-group">
    <label for="no_identitas">no_identitas</label>
    <input type="text" class="form-control" name="no_identitas" >
  </div>
  <div class="form-group">
    <label for="kode_barang">Kode Barang</label>
    <input type="text" class="form-control" name="kode_barang" >
  </div>
   <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="number" class="form-control" name="jumlah" >
  </div>
    <div class="form-group">
      <label for="keperluan">Keperluan</label>
      <input type="text" class="form-control" name="keperluan">
    </div>
     <div class="form-group">
      <label for="idlogin">id login</label>
      <input type="text" class="form-control" name="idlogin">
    </div>
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
  <input type="submit" class="btn btn-primary"></input>
</form>
      </div>
    </div>
  </div>
</div> 
   <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal Pinjam</th>
      <th scope="col">Tanggal Kembali</th>
      <th scope="col">No identitas</th>
      <th scope="col">Kode barang</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Keperluan</th>
      <th scope="col">Status</th>
         <th scope="col">id login</th>
     <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $item) : ?>
        <?php $nomor++; ?>
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo $item['tgl_peminjaman']; ?></td>
      <td><?php echo $item['tgl_kembali']; ?></td>
       <td><?php echo $item['no_identitas']; ?></td>
        <td><?php echo $item['kode_barang']; ?></td>
         <td><?php echo $item['jumlah']; ?></td>
          <td><?php echo $item['keperluan']; ?></td>
           <td><?php echo $item['status']; ?></td>
              <td><?php echo $item['id_login']; ?></td>
            <td>
            <?php echo "<a href='edit_pinjam.php?id=$item[id]'>Edit</a> | 
            <a href='javascript:hapusdata(".$item['id'].")'>Hapus Data</a> |
             <a href='javascript:kembalikanBarang(".$item['id']." ,".$item['jumlah'].",".$item['kode_barang'].")'>Kembalikan </a>" ;?>
              </td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
   </div>
   <script language="JavaScript" type="text/javascript">
    function hapusdata(id){
        if (confirm("apakah anda yakin akan menghapus data ini?")){
            window.location.href = 'delete_pinjam.php?id=' +id;
        }
    }
    function kembalikanBarang(id,jumlah,kd){
      if(confirm("Kembalikan Barang")){
        window.location.href ="kembalikan_barang.php?id=" +id+"&jumlah="+jumlah+"&kd="+kd;
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