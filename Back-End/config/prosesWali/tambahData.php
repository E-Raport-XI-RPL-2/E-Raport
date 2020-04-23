<?php 
    include('../connection/koneksi.php');

if(isset($_POST['create'])){
    $email = htmlspecialchars($_POST['email']);
    $namawali = htmlspecialchars($_POST['namawali']);
    $nip = htmlspecialchars($_POST['nip']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $absen = htmlspecialchars($_POST['absen']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    
    $sql = "INSERT INTO guru (email,namaguru,nip,kelas,jurusan,absen,username,password) VALUE('$email','$namaguru','$nip','$mapel','$mapel','$mapel','$username','$password')";
    

    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo"<script>alert('Berhasil ditambah');document.location.href='../../admin/create_guru.php';</script>";
    }else{
        echo "<script>prompt('Proses tidak Berhasil !')</script>";
    }
}
?>