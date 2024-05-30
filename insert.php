<?php
//add dbconnect

include('koneksi.php');

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = ($_POST['password']);
$level = $_POST['level'];

//query

$query =  "INSERT INTO user(nama_lengkap, username, password, level) VALUES('$nama_lengkap', '$username', '$password', '$level')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke index
    header("location:halaman_admin.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
