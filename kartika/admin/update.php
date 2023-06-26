<?php 

include 'koneksi.php';
 

$id = $_POST['id'];
$email = $_POST['email'];
$kontak = $_POST['kontak'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"update about set email='$email', kontak='$kontak', alamat='$alamat',deskripsi='$deskripsi' where id='$id'");
 

header("location:../admin/tentang.php");
 