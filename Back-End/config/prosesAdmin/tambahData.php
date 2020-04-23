<?php 
    include('../connection/koneksi.php');

if(isset($_POST['create'])){
    $email = htmlspecialchars($_POST['email']);
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    
    $sql = "INSERT INTO guru (email,nama,username,password) VALUE('$email','$nama','$username','$password')";
    

    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo"<script>alert('Berhasil ditambah');document.location.href='../../admin/create_guru.php';</script>";
    }else{
        echo "<script>prompt('Proses tidak Berhasil !')</script>";
    }
}
?>