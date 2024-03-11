<?php
require_once('database.php');
$id =$_GET ['id'];
$data= delete('user',$id);
if($data){
    header("location:user.php");
}

?>