<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


if($cek>0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=='admin'){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';
        $_SESSION['islogin'] = 'true';

        header("location:halaman_admin.php");
    } 
    elseif ($data['level'] == 'customer') {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'customer';
        $_SESSION['islogin'] = 'true';

        header("location:halaman_customer.php");
    }
    
    else{
        header("location:index.php?pesan=gagal");
    }
}
else{
    header("location:index.php?pesan=gagal");
}

?>