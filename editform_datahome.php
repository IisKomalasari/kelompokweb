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
    <title>Halaman Data Home | MarketPlace Buah Tangan </title>
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
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800 text-center"> Halaman Edit Home</h1>
<?php
$id_beranda = $_GET['id_beranda'];

//koneksi database
include('koneksi.php');

//query
$query = "SELECT * FROM beranda WHERE id_beranda ='$id_beranda'";
$result = mysqli_query($koneksi, $query);

?>
</div>
<!-- /.container-fluid -->
<div id="layoutSidenav_content">
<div class="container">
<div class="card mt-3">
<div class="card-header">
<h3>Form Edit Data Home</h3>
</div>
<div class="card-body">
<form role="form" action="edit_datahome.php" method="get" enctype="multipart/form-data" >

<?php
while ($row = mysqli_fetch_assoc($result)) {

?>

  <input type="hidden" name="id_beranda" value="<?php echo $row['id_beranda']; ?>">
    <div class="mb-3">
      <label for="isiberanda" class="form-label"> Isi beranda</label>
      <input type="text" class="form-control" name="isiberanda" id="isiberanda" value="<?= $row['isiberanda']; ?>">
    </div>
    <div class="form-group mt-3">
    <label for="gambarberanda">Gambar beranda</label>
    <input type="file" name="gambarberanda">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Update Data Home</button>
    <?php
    }
    mysqli_close($koneksi);
    ?>
</form>
</div>
</div>
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