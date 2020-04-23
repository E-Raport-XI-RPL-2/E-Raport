<?php 
    include('../connection/koneksi.php');

if(isset($_POST['create'])){
    $email = htmlspecialchars($_POST['email']);
    $namaguru = htmlspecialchars($_POST['namaguru']);
    $nip = htmlspecialchars($_POST['nip']);
    $mapel = htmlspecialchars($_POST['mapel']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    
    $sql = "INSERT INTO guru (email,namaguru,nip,mapel,username,password) VALUE('$email','$namaguru','$nip','$mapel','$username','$password')";
    

    $query=mysqli_query($koneksi,$sql);
    if($query){
        echo"<script>alert('Berhasil ditambah');document.location.href='../../admin/create_guru.php';</script>";
    }else{
        echo "<script>prompt('Proses tidak Berhasil !')</script>";
    }
}
?>