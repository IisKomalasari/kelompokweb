<?php
//add dbconnect

include('koneksi.php');

$isiberanda = $_POST['isiberanda'];
$gambarberanda = $_FILES['gambarberanda']['name'];

//query
$query =  "INSERT INTO beranda(isiberanda, gambarberanda ) VALUES('$isiberanda', '$gambarberanda')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:admin_datahome.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);