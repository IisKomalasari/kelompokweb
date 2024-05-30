<?php
include('koneksi.php');

$id = $_GET['id'];
$nama_lengkap = $_GET['nama_lengkap'];
$username = $_GET['username'];
$password = ($_GET['password']);
$level = $_GET['level'];

$query = "UPDATE user SET nama_lengkap='$nama_lengkap' , username='$username' , password='$password' , level='$level' WHERE id='$id' ";

if (mysqli_query($koneksi, $query)) {
	header("location:halaman_admin.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}