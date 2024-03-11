<?php
require_once('database.php');
$id =$_GET ['id'];
$data= delete('peminjaman',$id);
if($data){
    header("location:peminjaman.php");
}

?>