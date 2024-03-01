<?php
require_once("database.php");
session_start();
$tgl_pinjam=$_POST['tgl_pinjam'];
$xtgl_kembali=$_POST['tgl_kembali'];
$xidentitas=$_POST['no_identitas'];
$xkode=$_POST['kode_barang'];
$xjumlah=$_POST['jumlah'];
$xkeperluan=$_POST['keperluan'];
$xstatus=$_POST['status'];
$xid_log=$_POST['idlogin'];
$sql="INSERT INTO `peminjaman`(`id`, `tgl_peminjaman`, `tgl_kembali`, `no_identitas`, `kode_barang`, `jumlah`, `keperluan`, `status`, `id_login`) VALUES (NULL,'$tgl_pinjam','$xtgl_kembali','$xidentitas','$xkode','$xjumlah','$xkeperluan','$xstatus','$xid_log')";
$simpan= mysqli_query($koneksi,$sql);
if($simpan){
    header("location:peminjaman.php");
}else{
    echo"gagal maemasukan data baru";
}
?>