<?php 

include 'koneksi.php';
 

$nama = $_POST['posisi'];
$dari = $_POST['perusahaan'];
$sampai = $_POST['deskripsi'];
 

mysqli_query($koneksi,"insert into pengalaman values('','$nama','$dari','$sampai')");
 

header("location:../admin/pengalaman.php");
 
?>