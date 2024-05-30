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
	<title>Tambah User</title>
</head>

<body>
	<?php
	$id = $_GET['id'];

	//koneksi database
	include('koneksi.php');

	//query
	$query = "SELECT * FROM user WHERE id='$id'";
	$result = mysqli_query($koneksi, $query);

	?>
	<div class="container">
		<div class="card mt-3">
			<div class="card-header">
				<h3>Form Edit User</h3>
			</div>
			<div class="card-body">
				<form role="form" action="edit.php" method="get">
					<?php
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap']; ?>">
						</div>

						<div class="form-group mt-3">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
						</div>
						<div class="form-group mt-3">
							<label>Level</label>
							<select class="form-select" name="level" value="<?php echo $row['level']; ?>">
								<option value=" admin">Admin</option>
								<option value="customer">customer</option>
							</select>
						</div>
						<button type="submit" class="btn btn-success mt-3">Update User</button>
					<?php
					}
					mysqli_close($koneksi);
					?>
				</form>
			</div>
		</div>
	</div>
</body>

</html>