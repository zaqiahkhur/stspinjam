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
  <h1>Add User</h1> 
 <form action = "input_user.php" method ="post">
 <div class="form-group">
      <label for="noiden">No identitas</label>
      <input type="text" class="form-control" name="noiden">
    </div>
    <div class="form-group">
      <label for="namau">Nama User</label>
      <input type='text' class='form-control' name='namau' >
    </div>
  <div class="form-group">
    <label for="status">Status</label>
    <input type="dropdown" class="form-control" name="status" >
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" >
  </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" class="form-control" name="password">
    </div>
        <div class="form-group">
      <label for="role">Role</label>
      <input type="text" class="form-control" name="role">
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