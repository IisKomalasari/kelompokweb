<?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, 'SELECT * FROM tb_produk');
    $data = mysqli_fetch_array($query);
    print_r($data);
?>