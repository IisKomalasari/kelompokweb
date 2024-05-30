<?php
session_start();
if(isset($_SESSION["islogin"]) && $_SESSION["islogin"]) {
  if($_SESSION['level'] == 'admin') {
    header("location:halaman_admin.php");
  } else if ($_SESSION['level'] == 'customer') {
    header("location:halaman_customer.php");
  } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="assets/my-logo.ico" />
  <title>Sign In | MarketPlace Buah Tangan</title>
</head>

<body>
  <div class="container">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-6 col-xl-5 col-lg-5 col-md-6 col-sm-9">
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                        <div class="text-center my-5">
                        <img src="assets/image/user_icon.png" alt="user_icon" width="50" >
                            <h2 class=" fs-2 fw-bold mb-5 text-warning" align="center" >Sign In</h2>
                            <form action="aksi.php" method="post" accept-charset="utf-8">
                            <?php
                            if (isset($_GET['pesan'])) {
                              if ($_GET['pesan'] == "gagal") {
                              echo '<div class="alert alert-danger" role="alert"> Maaf, username dan password yang anda masukkan tidak valid</div>';
                              }
                            }
                            ?>  
                              <div class="mb-3">
                                  <input type="text" class="form-control" name="username" id="username" placeholder="Isikan Email anda disini" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                              <div class="mb-3">   
                                  <input type="password" class="form-control" name="password" id="password" placeholder="Isikan Password anda disini" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                              <div class="d-grid gap-2 col-12 mx-auto mb-4">
                              <button type="submit" class="btn btn-outline-warning">Sign In</button>
                              </div>
                              <p align="left">Not a Registered Account? <a href="register.php">Sign Up here</a></p>
                            </form>
                        </div>
                      </div>
                    <div class="text-center mt-5 text-muted">
                      Copyright &copy; Kelompok 4 Pengembangan Platform Web
                    </div>
                </div>
            </div>
        </div>            
</body>
</html>