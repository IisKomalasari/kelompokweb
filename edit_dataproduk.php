<?php
include('koneksi.php');

$id_produk = $_GET['id_produk'];
$namaproduk = $_GET['namaproduk'];
$hargaproduk = $_GET['hargaproduk'];
$statusproduk = $_GET['statusproduk'];
$stokproduk = $_GET['stokproduk'];
$imageproduk = $_GET['imageproduk'];

$query = "UPDATE produk SET id_produk='$id_produk',  namaproduk ='$namaproduk', hargaproduk ='$hargaproduk', statusproduk='$statusproduk', stokproduk ='$stokproduk', imageproduk ='$imageproduk' WHERE id_produk='$id_produk' ";

if (mysqli_query($koneksi, $query)) {
	header("location:admin_dataproduk.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
