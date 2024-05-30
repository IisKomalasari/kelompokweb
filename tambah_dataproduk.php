<?php
session_start();
if ($_SESSION["level"] != "admin") {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/my-logo.ico" />
    <title>Halaman Data Produk| MarketPlace Buah Tangan </title>
</head>
<body>
<div>
		<div class="p-2 mb-1 bg-primary text-white">
		<div class="section">
		<div class="container">
		<nav class="navbar">
        <a class="navbar-brand text-white">
            <img src="assets/image/Logo.png" alt="Logo" width="60" height="60">
            <h4 class="d-inline-block align-text-top">MarketPlace Buah Tangan</h4>
        </a>
            <ul class="navbar text-white justify-content-end">
        <li class="navbar text-white">
            <a class="nav-link text-white" href="halaman_admin.php">Dashboard Admin</a>
        </li>
        <li class="navbar text-white">
            <a class="nav-link text-white" href="admin_datahome.php">Data Home</a>
        </li>
        <li class="navbar text-white">
            <a class="nav-link text-white" href="admin_dataproduk.php">Data Produk</a>
        </li>
        <li class="navbar text-white">
            <a class="nav-link text-white" href="admin_dataabout.php">Data About</a>
        </li>
        <li class="navbar text-white">
            <a class="nav-link text-white" href="admin_datapemesanan.php">Data Pemesanan(Cart)</a>
        </li>
        </ul>
	   </div>
	  </div>
	</div>
</div>
</header>
<main>
<div class="container">
            <div class="card mt-3">
                <div class="card-header">
                <h1 class="h3 mb-4 text-gray-800"> Halaman Tambah Data Produk</h1>
            <?php
            //koneksi database
            include('koneksi.php');
            ?>
 <div class="card-body">
 <form role="form" action="insert_dataproduk.php" method="post" enctype="multipart/form-data">   
    <div class="mb-3">
      <label for="namaproduk" class="form-label"> Nama Produk</label>
      <select type="text" class="form-control" name="namaproduk" id="namaproduk">
		<option value="">Nama Produk</option>
		<option>Frame 2 Dimensi</option>
		<option>Frame 3 Dimensi</option>
		</select>
    </div>
	<div class="form-group mt-3">
         <label for="hargaproduk">Harga</label>
         <input type="number" name="hargaproduk" class="input-control">
     </div>
	 <div class="mb-3">
      <label for="statusproduk" class="form-label"> Status Produk</label>
      <select type="text" class="form-control" name="statusproduk" id="statusproduk">
		<option value="">Status Produk</option>
		<option >Tersedia</option>
		<option >Tidak Tersedia</option>
		</select>
    </div>
	<label for="stokproduk" class="form-label"> Status Produk</label>
      <select type="text" class="form-control" name="stokproduk" id="stokproduk">
		<option value="">Stok Produk</option>
		<option >Tersedia</option>
		<option >Tidak Tersedia</option>
		</select>
    </div>
    <div class="form-group mt-3">
    <label for="imageproduk">Gambar Tentang</label>
    <input type="file" name="imageproduk" accept="images/png, images/jpg, images/jpeg">
    </div>
    <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah Data Produk</button>
    </form>
        </div>
        </div>
        <!-- End of Content Wrapper -->
        <?php
        if(isset($_POST['tambah'])){
            $namaproduk = $_POST['namaproduk'];
            $hargaproduk = $_POST['hargaproduk'];
            $statusproduk = $_POST['statusproduk'];
            $stokproduk = $_POST['stokproduk'];
            $imageproduk = $_FILES['imageproduk']['name'];
            $source = $_FILES['imageproduk']['tmp_name'];
            $folder = './image/';
    
            move_uploaded_file( $source, $folder.$imageproduk);
        }
        ?>    
    </div>
</main>     
<!-- footer -->
<footer>
	<div class="text-center p-2 mb-1 bg-primary text-white">
        <small>Copyright &copy; 2022 - Praktikum Pengembangan Platform Web</small>
	</div>
</footer>
</body>
</html>