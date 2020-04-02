<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="icon" href="asset/img/logogan.png">
    <title>E - Raport</title>

    <style>
        body {
            background-color: #3B5964;
            color: white;
        }
    </style>
</head>

<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
    ?>
    
    <div class="containerlogin">

        <div class="logo">
            <img src="asset/img/orang1.png" width="40px" height="40px">
        </div>


        <center>
            <p>Form Login E - Raport</p>
        </center>
        <form method="post" action="config/proseslogin.php">
            <div class="form-login">
                <label>Username</label>

                <input type="text" name="username" placeholder="Input Username">

                <label>Password</label>
                <br>
                <input type="password" name="password" placeholder="Input Password">
                <br>

                <center>
                    <input type="submit" class="tombol_login" value="login">

                    <input type="submit" class="tombol_register" value="register">
                </center>
        </form>
    </div>
    </div>






</body>

</html>