<?php 

$id_tentang  = $_GET['id_tentang'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM tentang WHERE id_tentang = '$id_tentang' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:admin_dataabout.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
