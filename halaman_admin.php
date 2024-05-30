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
    <title>Halaman Admin | MarketPlace Buah Tangan </title>
</head>
<body>
    <?php
    //tambahkan dbconnect
    include('koneksi.php');
    //query
    $query = "SELECT *FROM user";
    $result = mysqli_query($koneksi, $query);
    ?>
	<!-- header -->
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
<main>
    <div class="container">
    <div class="card mt-3">
            <div class="card-header">
                <h3>Daftar User's</h3>
            </div>
            <div class="card-body">
                <a href="form_tambah.php" class="btn btn-success">Tambah User</a>
                <table class="table table-striped table-hover dtabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama_lengkap']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['level']; ?></td>
                                <td>
                                    <a href="editform.php?id=<?php echo $row['id']; ?>" class="btn btn-success" role="button">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" role="button">Delete</a>
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
            <div class="card-header">
            <div class="card mt-3">
            <div class="container">
                <h3 class="text-center">Selamat Datang di Halaman Admin MarketPlace Buah Tangan</h3>
                <p>Username : <?php echo $_SESSION["username"] ?></p>
                <p>Level : <?php echo $_SESSION["level"] ?></p>
                <a href="logout.php" class="btn btn-danger">Logout</a>
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