<?php
// require("database.php");
$koneksi = mysqli_connect("localhost", "root", "", "peminjaman_barang") or die;

// session_start();
$xkodebarang=$_POST['kodebarang'];
$xbarang=$_POST['namabarang'];
$xkategori=$_POST['kategori'];
$xmerk=$_POST['merk'];
$xjumlah=$_POST['jumlah'];
// var_dump($koneksi);
// $sql="INSERT INTO barang VALUES (null,$kodebarang','$barang','$kategori','$merk','$jumlah')";
$sql="INSERT INTO `barang`(`id`, `kode_barang`, `nama_barang`, `kategori`, `merk`, `jumlah`) VALUES (NULL,'$xkodebarang','$xbarang','$xkategori','$xmerk','$xjumlah')";
$save=mysqli_query($koneksi,$sql);
if($save){
    header("location:barang.php");
}
?>