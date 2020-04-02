<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background-color: #E4E4E4;
            color: #3B5964;
        }
    </style>
    <script>
        function logout() {

            confirm("Apakah Anda Yakin Ingin Keluar ?");

        }
    </script>

</head>

<body>

    <div class="navbar_create">

        <div class="dropdown">
            <h2>Create Account</h2>
            <span class="drop"><i class="fas fa-sort-down"></i></span>
            <div class="drop_konten">
                <a href="create_wali.php">Wali Kelas</a>
                <a href="create_staff.php">Staff</a>
                <a href="create_guru.php">Guru</a>

            </div>
        </div>
    </div>


    <input type="checkbox" id="check">

    <label for="check">

        <i class="fas fa-bars" id="btn"></i>

    </label>

    <nav class="main-nav">
        <div class="sidebar_create">
            <ul class="main-nav-ul">
                <div class="profile">

                    <img src="../asset/img/seha2.jpg" width="50px" height="50px">

                    <p class="nama">Nama</p>
                    <p class="pengelola">Pengelola Akun</p>

                </div>
                <li><a href="index.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>

                <li><a href="create.php" class="arrow"><i class="fas fa-user-circle"></i>Buat Akun</a>
                    <ul class="side_drop">

                        <li><a href="create_guru.php"><i class="fas fa-angle-double-right"></i>Buat Akun Guru</a></li>
                        <li><a href="create_wali.php"><i class="fas fa-angle-double-right"></i>Buat Akun Wali Kelas</a>
                        </li>
                        <li><a href="create_staff.php"><i class="fas fa-angle-double-right"></i>Buat Akun Staff</a>
                        </li>

                    </ul>
                </li>

                <li><a href="tentang.html" class="arrow"><i class="far fa-address-card"></i>Tentang Akun</a>
                    <ul class="side_drop">
                        <li><a href="tentang_guru.html"><i class="fas fa-angle-double-right"></i>Akun Guru</a></li>
                        <li><a href="tentang_wali.html"><i class="fas fa-angle-double-right"></i>Akun Wali Kelas</a>
                        </li>
                        <li><a href="tentang_staff.html"><i class="fas fa-angle-double-right"></i>Akun Staff</a></li>
                    </ul>


                </li>
                <li><a href="#" onclick="logout()"><i class="fas fa-power-off"></i>Log Out</a></li>

            </ul>



        </div>
    </nav>







</body>

</html>