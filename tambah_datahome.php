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
    <title>Halaman Data Home| MarketPlace Buah Tangan </title>
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
                    <h1 class="h3 mb-4 text-gray-800"> Halaman Tambah Data Home</h1>
            <?php
            //koneksi database
            include('koneksi.php');
            ?>
    <div class="container">
        <div class="card">
                <h3>Form Data Home</h3>
            <div class="card-body">
                <form role="form" action="insert_datahome.php" method="post" enctype="multipart/form-data">    
                    <div class="form-group mt-3">
                        <label for="isiberanda">Isi Home</label>
                        <input type="text" name="isiberanda" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="gambarberanda"> Pilih Gambar</label>
                        <br>
                        <input type="file" id="gambarberanda"  name="gambarberanda" accept="images/png, images/jpg, images/jpeg"> 
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah Data About</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- End of Content Wrapper -->
        <?php
        if(isset($_POST['tambah'])){
            $isiberanda = $_POST['isiberanda'];
            $gambarberanda = $_FILES['gambarberanda']['name'];
            $source = $_FILES['gambarberanda']['tmp_name'];
            $folder = './image/';
    
            move_uploaded_file( $source, $folder.$gambarberanda);
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