<?php
require_once("database.php");

session_start();

$tgl_pinjam=$_POST['tgl_pinjam'];

$xtgl_kembali=$_POST['tgl_kembali'];

$xidentitas=$_POST['no_identitas'];

$xkode=$_POST['kode_barang'];

$xjumlah=$_POST['jumlah'];

$xkeperluan=$_POST['keperluan'];

$xid_log=$_POST['idlogin'];

// $sql="INSERT INTO peminjaman  VALUES (NULL,'$tgl_pinjam','$xtgl_kembali','$xidentitas','$xkode',
//  '$xjumlah','$xkeperluan','Belum Kembali','$xid_log')";

 $sql="INSERT INTO peminjaman  VALUES (NULL,'$tgl_pinjam','$xtgl_kembali','$xidentitas','$xkode', 
 '$xjumlah','$xkeperluan','Belum Kembali','$xid_log')";

// INSERT INTO peminjaman  VALUES (NULL,'2024-02-01','2024-02-07','12','567A',
//  '2','di pakai belajar','kembali','1')

$updateBarang="UPDATE barang SET jumlah=jumlah-1 WHERE id='$xkode'";
$simpan= mysqli_query($koneksi,$sql);
if($simpan){
    header("location:peminjaman.php");
}else{
    echo"gagal maemasukan data baru";
}
?>