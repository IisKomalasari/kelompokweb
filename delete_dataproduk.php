<?php 

$id_produk = $_GET['id_produk'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM produk WHERE id_produk = '$id_produk' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:admin_dataproduk.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
