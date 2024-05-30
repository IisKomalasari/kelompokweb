<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM user WHERE id = '$id' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:halaman_admin.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
