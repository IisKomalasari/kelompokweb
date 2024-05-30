<?php
include('koneksi.php');

$id_beranda = $_GET['id_beranda'];
$isiberanda = $_GET['isiberanda'];
$gambarberanda = $_GET['gambarberanda'];

$query = "UPDATE beranda SET id_beranda='$id_beranda',  isiberanda ='$isiberanda', gambarberanda ='$gambarberanda' WHERE id_beranda='$id_beranda' ";

if (mysqli_query($koneksi, $query)) {
	header("location:admin_datahome.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);