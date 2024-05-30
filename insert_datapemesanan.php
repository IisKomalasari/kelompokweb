<?php
// Add dbconnect
include('koneksi.php');

// Retrieve form data
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$namaproduk = $_POST['namaproduk'];
$banyakproduk = $_POST['banyakproduk'];
$totalhargaproduk = $_POST['totalhargaproduk'];
$imageproduk = $_FILES['imageproduk']['name'];

//query
$query = "INSERT INTO pemesanan (tanggal_pemesanan, namaproduk, banyakproduk, totalhargaproduk, imageproduk) 
              VALUES ('$tanggal_pemesanan', '$namaproduk', '$banyakproduk', '$totalhargaproduk', '$imageproduk')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:admin_datapemesanan.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
