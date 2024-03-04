<?php
$koneksi = mysqli_connect("localhost", "root", "", "peminjaman_barang") or die;

function getalldata($tablename)
{
  global $koneksi;
  $hasil= mysqli_query($koneksi, "SELECT * FROM $tablename");
   $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) 
    {
        $rows[] = $row;
    }
    return $rows;
}
function getpinjam($no_identitas)
{
    global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT * FROM peminjaman WHERE no_identitas = '$no_identitas'");
    $rows=[];
        while($row = mysqli_fetch_assoc($hasil))
        {
            $rows[] = $row;
        }
        return $rows;
}

function tampildata_user($tablename){
  global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT * FROM $tablename");
   $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) 
    {
        $rows[] = $row;
    }
    return $rows;
}
function peminjaman($table,$data,$id){
  global $koneksi;
  $hasil=mysqli_query($koneksi,"UPDATE $table SET status = '$data' WHERE id = '$id'");
  return $hasil;
}
function getdata_peminjaman(){
  global $koneksi;
  $hasil=mysqli_query($koneksi,"SELECT peminjaman.id,peminjaman.tgl_peminjaman,peminjaman.tgl_kembali,peminjaman.no_identitas,user.nama,peminjaman.kode_barang,barang.nama_barang,peminjaman.jumlah,peminjaman.keperluan,peminjaman.status FROM peminjaman INNER JOIN user ON peminjaman.no_identitas= USER.no_identitas INNER JOIN barang ON peminjaman.kode_barang=barang.kode_barang;");
}


          function editdata($tablename,$id)
          {
            global $koneksi;
            $hasil=mysqli_query($koneksi, "select * from $tablename where id = $id");
            return $hasil;
          }

          function updatedata($table,$data,$id)
          {
            global $koneksi;
            $sql = "UPDATE $table SET nama_barang  = '$data' WHERE id = '$id'";
            $hasil=mysqli_query($koneksi,$sql);
            return $hasil;
          } 

          function Delete($tablename,$id)
          {
            global $koneksi;
            $hasil=mysqli_query($koneksi,"delete from $tablename where id='$id'");
            return $hasil;
          }

          function cek_login($username,$password)
          {
            global $koneksi;
            $uname = $username;
            $upass = $password;

            $hasil= mysqli_query($koneksi,"select * from user where username='$uname' and password='$upass'");
            $cek=mysqli_num_rows($hasil);
            if($cek > 0){
              $sql= mysqli_fetch_array($hasil);
                $_SESSION ['id_user']=$sql['id_user'];
                $_SESSION ['username']=$sql['username'];
                $_SESSION['no_identitas']=$sql['no_identitas'];
                $_SESSION ['role']=$sql['role'];
              return true;
            }else{
              return false;
            }

          }
          function inputdata($inputdata)
          {
            global $koneksi;
            $sql=mysqli_query($koneksi, $inputdata);
            return $sql;
          }

?>