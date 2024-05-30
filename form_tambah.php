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
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h3>Form Tambah User</h3>
            </div>
            <div class="card-body">
                <form role="form" action="insert.php" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="level">Level</label>
                        <select class="form-select" name="level">
                            <option value="admin">Admin</option>
                            <option value="customer">customer</option>
                  
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info mt-3">Tambah User</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>