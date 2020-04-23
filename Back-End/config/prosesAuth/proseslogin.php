<?php

session_start();

include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if ($level == 1) {
    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND  password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../admin/index.php");
    }else{
        header("location:../index.php?pesan=gagal");
    }
}

if ($level == 2) {
    $data = mysqli_query($koneksi, "SELECT * FROM wali_kelas WHERE username='$username' AND  password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../admin/index.php");
    }else{
        header("location:../index.php?pesan=gagal");
    }
}

if ($level == 3) {
    $data = mysqli_query($koneksi, "SELECT * FROM guru WHERE username='$username' AND  password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../admin/index.php");
    }else{
        header("location:../index.php?pesan=gagal");
    }
}

if ($level == 4) {
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND  password='$password'");

    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../admin/index.php");
    }else{
        header("location:../index.php?pesan=gagal");
    }
}


?>