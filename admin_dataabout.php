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
    <title>Halaman Data About | MarketPlace Buah Tangan </title>
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
                    <div class="card-header text-center">
                        <h3>Halaman Pengelolaan Data About</h3>
                        <?php
                        //tambahkan dbconnect
                        include('koneksi.php');

                        //query
                        $query = "SELECT * FROM tentang";

                        $result = mysqli_query($koneksi, $query);

                        ?>
                    </div>
                    <div class="card-body">
                        <a href="tambah_dataabout.php" class="btn btn-primary">Tambah Data About</a>
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No.</th>
                                <th>Isi Tentang</th>
                                <th>Gambar Tentang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                while ($row= mysqli_fetch_assoc($result)) {
                            ?>
                                <tr align="center">
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['isitentang']; ?></td>
                                    <td><?php echo $row['gambartentang']; ?></td>
                                    <td>
                                        <p class="d-grid gap-2 col-15 mx-auto">
                                        <a href="editform_dataabout.php?id_tentang=<?php echo $row['id_tentang']; ?>" class="btn btn-primary btn-sm" role="button">Edit</a>
                                        <a href="delete_dataabout.php?id_tentang=<?php echo $row['id_tentang']; ?>" onclick="return confirm('Anda yakin ingin hapus')" class="btn btn-danger btn-sm" role="button">Delete</a>
                                        </p>
                                    </td>
                                </tr>
                            <?php
                            }
                            // mysqli_close($koneksi);
                            ?>
                        </tbody>
                        </table>
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