<?php 

include 'koneksi.php';
 

$id = $_GET['id'];
 
 

mysqli_query($koneksi,"delete from pengalaman where id='$id'");
 

header("location:../admin/pengalaman.php");
 
?>