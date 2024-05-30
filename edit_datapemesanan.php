<?php
include('koneksi.php');

$kd_pemesanan = $_GET['kd_pemesanan'];
$tanggal_pemesanan = ($_GET['tanggal_pemesanan']);
$namaproduk = $_GET['namaproduk'];
$banyakproduk = $_GET['banyakproduk'];
$totalhargaproduk = $_GET['totalhargaproduk'];
$imageproduk = $_GET['imageproduk'];

$query = "UPDATE pemesanan SET kd_pemesanan='$kd_pemesanan', tanggal_pemesanan='$tanggal_pemesanan', namaproduk ='$namaproduk', banyakproduk='$banyakproduk', totalhargaproduk='$totalhargaproduk', imageproduk='$imageproduk' WHERE kd_pemesanan='$kd_pemesanan' ";

if (mysqli_query($koneksi, $query)) {
	header("location:admin_datapemesanan.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);