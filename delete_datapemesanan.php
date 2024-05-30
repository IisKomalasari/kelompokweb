<?php 

$kd_pemesanan = $_GET['kd_pemesanan'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM pemesanan WHERE kd_pemesanan = '$kd_pemesanan' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:admin_datapemesanan.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
