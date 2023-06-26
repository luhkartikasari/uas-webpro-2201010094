<?php 

include 'koneksi.php';
 

$nama = $_POST['nama'];
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];
 

mysqli_query($koneksi,"insert into pendidkan values('','$nama','$dari','$sampai')");
 

header("location:../admin/index.php");
 
?>