<?php
session_start();
if($_SESSION["level"] !="customer") {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/homepage.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/x-icon" href="assets/my-logo.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,700&display=swap" rel="stylesheet">
    <title>Halaman Produk | Buah Tangan</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="d-flex justify-content-between" id="navBar">
            <div class="align-self-center">
                <img id="logoNav" src="assets/my-logo.png">
            </div>
            <div class=" align-self-center" id="menu-item">
                <ul>
                    <li><a href="halaman_customer.php">Home</a></li>
                    <li><a href="halaman_produk.php" id="active">Product</a></li>
                    <li><a href="halaman_about.php">About Us</a></li>
                    <li><a href="halaman_cart.php">Cart(0) <i class="fa-solid fa-cart-shopping"></i></i></a></li>
                    <li><a href="logout.php">Sign In <i class="fa-regular fa-user"></i></a></li>
                </ul>
            </div>
        </div>
    <section>
    <div id="content" class="row" style="margin-top: 20px; ">
            <div class="col">
                <img class="img-fluid" id="imgProd1" src="assets/img-prdk1.png" style="width: auto;">
            </div>
            <div class="col">
                <img class="img-fluid" id="imgProd2" src="assets/img-ds2.png" style="width: auto;">
            </div>
        </div>
        <button onclick="haloGoblog('Frame 2 Dimensi');" type="button" class="btnProd btnProd-3" style="margin-left: 840px; margin-top:3px; margin-bottom: 3px;" href="#">Pre Order</button>
    </div>
    </section>
    <footer>
    <div class="d-flex justify-content-around bg-white" id="footer">
        <img src="assets/image/f1.png" class="footerImg">
        <img src="assets/image/f2.png" class="footerImg">
        <img src="assets/image/f3.png" class="footerImg">
        <img src="assets/image/f4.png" class="footerImg">
        <img src="assets/image/f5.png" class="footerImg">
    </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
        AOS.init();
    </script>
    <script>
        function haloGoblog(id) {
            alert('Membeli frame :' + id)
        };
    </script>
</body>

</html>