<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="assets/my-logo.ico"/>
    <title>Sign Up | Buah Tangan</title>
  </head>
  <body>
<section>
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">  
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                        <div class="text-center my-5">
                        <img src="assets/image/user_icon.png" alt="user_icon" width="50" >
                            <h2 class="fs-3 card-title fw-bold mb-3 text-warning" align="center" >Sign Up</h2>
                        <form action="insert.php" method="post" class="row g-3 needs-validation">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Email" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                              <div class="mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')"></input>
                              </div>
                              <div class="form-group mt-3">
                              <label for="level">Level</label>
                               <select class="form-select" name="level">
                                  <option value="admin">Admin</option>
                                  <option value="customer">customer</option>
                              </select>
                              </div>
                              <div class="d-grid gap-2 col-12 mx-auto">
                              <button type="submit" class="btn btn-outline-warning">Sign Up</button>
                              </div>
                              <br>
                              <p align="left">Already have an account? <a href="index.php">Sign In</a></p>
                      </form>
       </div>
</section>
    <script type="text/javascript" href="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>