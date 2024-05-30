<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'db_marketplacebuahtangan';

$koneksi = new mysqli($servername,$username,$password,$database);

if ($koneksi->connect_error){
    echo 'Koneksi Gagal : ' . $koneksi->connect_error;
}
//echo 'Koneksi Berhasil';