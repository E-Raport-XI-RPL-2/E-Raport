<?php

$koneksi = mysqli_connect("localhost","root","","db_eraport");

if(mysqli_connect_errno()){
    echo "koneksi gagal : " . mysqli_connect_error();
}
?>