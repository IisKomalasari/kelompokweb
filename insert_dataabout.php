<?php
//add dbconnect

include('koneksi.php');

$isitentang = $_POST['isitentang'];
$gambartentang = $_FILES['gambartentang']['name'];

//query
$query =  "INSERT INTO tentang(isitentang, gambartentang ) VALUES('$isitentang', '$gambartentang')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:admin_dataabout.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);