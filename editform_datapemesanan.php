<?php
session_start();
if ($_SESSION["level"] != "admin") {
	header("location:halaman_admin.php");
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
	<title>Edit Data Pemesanan</title>
</head>

<body>
	<?php
	$kd_pemesanan = $_GET['kd_pemesanan'];

	//koneksi database
	include('koneksi.php');

	//query
	$query = "SELECT * FROM pemesanan WHERE kd_pemesanan='$kd_pemesanan'";
	$result = mysqli_query($koneksi, $query);

	?>
<header>
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
	<div class="container">
		<div class="card mt-3">
			<div class="card-header">
				<h3>Form Edit Pemesanan</h3>
			</div>
			<div class="card-body">
				<form role="form" action="edit_datapemesanan.php" method="get" enctype="multipart/form-data" >
					<?php
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<input type="hidden" name="kd_pemesanan" value="<?php echo $row['kd_pemesanan']; ?>">

						<div class="form-group mt-3">
							<label>Tanggal Pemesanan</label>
							<input type="date" name="tanggal_pemesanan" class="form-control" value="<?php echo $row['tanggal_pemesanan']; ?>">
						</div>

						<div class="form-group mt-3">
							<label><th>Nama Produk</th></label>
    						<select type="text" class="form-control" name="namaproduk" id="namaproduk" value="<?php echo $row['namaproduk']; ?>">
							<option>pilih produk</option>
							<option>Frame 2 Dimensi</option>
							<option>Frame 3 Dimensi</option>
							</select>
						</div>

                        <div class="form-group mt-3">
							<label><th>Banyak Produk</th></label>
							<input type="number" name="banyakproduk" class="form-control" value="<?php echo $row['banyakproduk']; ?>">
						</div>

                        <div class="form-group mt-3">
							<label><th>Harga Total</th></label>
							<input type="number" name="totalhargaproduk" class="form-control" value="<?php echo $row['totalhargaproduk']; ?>">
						</div>

                        <div class="form-group mt-3">
							<label><th>Image Produk</th></label>
							<input type="file" name="imageproduk" class="form-control" value="<?php echo $row['imageproduk']; ?>">
						</div>
						<button type="submit" class="btn btn-success mt-3">Update Data</button>
					<?php
					}
					mysqli_close($koneksi);
					?>
				</form>
			</div>
		</div>
	</div>
	<!-- footer -->
	<footer>
	<div class="text-center p-2 mb-1 bg-primary text-white">
        <small>Copyright &copy; 2022 - Praktikum Pengembangan Platform Web</small>
	</div>
	</footer>
</body>
</html>