<?php 

include 'koneksi.php';
 
$id = $_POST['id'];
$nama = $_POST['nama'];
$dari = $_POST['dari'];
$sampai = $_POST['selesai'];
 

mysqli_query($koneksi,"update pendidkan set nama='$nama',dari='$dari',sampai='$sampai' where id='$id'");
 

header("location:../admin/index.php");
 
?>