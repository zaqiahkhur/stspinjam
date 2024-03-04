<?php
require_once("database.php");
session_start();
$xnoiden=$_POST['noiden'];
$xnama=$_POST['namau'];
$xstatus=$_POST['status'];
$xusername=$_POST['username'];
$xpassword=$_POST['password'];
$xrole=$_POST['role'];
$sql="INSERT INTO `user`(`id`, `no_identitas`, `nama`, `status`, `username`, `password`, `role`) VALUES (null,'$xnoiden','$xnama','$xstatus','$xusername','$xpassword','$xrole')";
$simpan= mysqli_query($koneksi,$sql);
if($simpan){
    header("location:user.php");
}else{
    echo"gagal maemasukan data baru";
}
?>