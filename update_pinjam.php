<?php
 require_once("database.php");
 $id=$_POST['id'];
 $xbrg = $_POST['peminjaman'];

 $sql2=peminjaman("peminjaman",$xbrg,$id);
 if ($sql2) {
    header("location:peminjaman.php");
 }
?>