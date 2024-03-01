<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Tambah Barang</title>
  </head>
  <body>
   <div class="container">
  <h1>Add Barang</h1> 
 <form action = "proses_input_barang.php" method ="post">
 <div class="form-group">
      <label for="kodebarang">Kode Barang</label>
      <input type="text" class="form-control" name="kodebarang">
    </div>
    <div class="form-group">
      <label for="namabarang">Nama Barang</label>
      <input type='text' class='form-control' name='namabarang' >
    </div>
  <div class="form-group">
    <label for="kategori">kategori</label>
    <input type="text" class="form-control" name="kategori" >
  </div>
  <div class="form-group">
    <label for="merk">merk</label>
    <input type="text" class="form-control" name="merk" >
  </div>

    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" class="form-control" name="jumlah">
    </div>

  <input type="submit" class="btn btn-primary">Save</input>
</form>
  
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>