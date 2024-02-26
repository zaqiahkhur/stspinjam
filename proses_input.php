<?php
require_once("database.php");
session_start();
$xbrg =$_POST['barang'];
$id_user =$_SESSION['id_user'];
$simpan = inputdata("INSERT INTO barang VALUES (null,now(),'$xnote',$id_user)");
if($simpan){
    header("location:barang.php");
}else{
    echo"gagal maemasukan data baru";
}
?>