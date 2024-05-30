<?php
// Add dbconnect
include('koneksi.php');

// Retrieve form data
$namaproduk = $_POST['namaproduk'];
$hargaproduk = $_POST['hargaproduk'];
$statusproduk = $_POST['statusproduk'];
$stokproduk = $_POST['stokproduk'];
$imageproduk = $_FILES['imageproduk']['name'];

//query
$query = "INSERT INTO produk (namaproduk, hargaproduk, statusproduk, stokproduk, imageproduk) 
              VALUES ('$namaproduk', '$hargaproduk', '$statusproduk', '$stokproduk', '$imageproduk')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:admin_dataproduk.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
