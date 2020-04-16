<?php 
    include('koneksi.php');

if(isset($_POST['Create'])){
    $email = htmlspecialchars($_POST['email']);
    $namaguru = htmlspecialchars($_POST['namaguru']);
    $nip = htmlspecialchars($_POST['nip']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "INSERT INTO guru(email,namaguru,nip,username,password) VALUE('$email','$namaguru','$nip','$username','$password')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo"<script>alert('Berhasil ditambah');document.location.href='../admin/create_guru.php';</script>";
    }
}
?>