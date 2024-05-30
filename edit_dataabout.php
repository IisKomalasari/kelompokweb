<?php
include('koneksi.php');

$id_tentang = $_GET['id_tentang'];
$isitentang = $_GET['isitentang'];
$gambartentang = $_GET['gambartentang'];

$query = "UPDATE tentang SET id_tentang='$id_tentang',  isitentang ='$isitentang', gambartentang ='$gambartentang' WHERE id_tentang='$id_tentang' ";

if (mysqli_query($koneksi, $query)) {
	header("location:admin_dataabout.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);