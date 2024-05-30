<?php 

$id_beranda  = $_GET['id_beranda'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM beranda WHERE id_beranda = '$id_beranda' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:admin_datahome.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
