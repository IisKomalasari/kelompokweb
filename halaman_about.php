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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/homepage.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="icon" type="image/x-icon" href="assets/my-logo.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,700&display=swap" rel="stylesheet">
    <title>Halaman About | Buah Tangan</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="d-flex justify-content-between" id="navBar">
            <div class="align-self-center">
                <img id="logoNav" src="assets/image/my-logo.png">
            </div>
            <div class=" align-self-center" id="menu-item">
                <ul>
                    <li><a href="halaman_customer.php">Home</a></li>
                    <li><a href="halaman_produk.php">Product</a></li>
                    <li><a href="halaman_about.php" id="active">About Us</a></li>
                    <li><a href="halaman_cart.php">Cart(0) <i class="fa-solid fa-cart-shopping"></i></i></a></li>
                    <li><a href="logout.php">Sign In <i class="fa-regular fa-user"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
<main>
<div id="content" class="d-flex justify-content-around">
        <img src="assets/img-abt2.png" id="contentabt1" data-aos="fade-right">
        <img src="assets/img-abt1.png" id="contentabt2" data-aos="fade-left">
    </div>
</main>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"> AOS.init();</script>
    <script>AOS.init();</script>
</body>

</html>