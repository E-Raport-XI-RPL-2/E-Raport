<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="icon" href="../asset/img/logogan.png">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <script type="text/javascript" src="../asset/js/jquery-3.4.1.min.js"></script>
     <script type="text/javascript">
         $(document).ready(function (e) {
             $('.has-sub').click(function () {
                 $(this).toggleClass('tap');
             });
         });
     </script>
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
            <h2>Tentang Akun Wali Kelas</h2>
            <span class="drop_tentang_wali"><i class="fas fa-sort-down"></i></span>
            <div class="drop_konten">
                <a href="tentang_wali.php">Wali Kelas</a>
                <a href="tentang_staff.php">Staff</a>
                <a href="tentang_guru.php">Guru</a>

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

                                 <li class="has-sub"><a href="create.php"><i class="fas fa-user-circle"></i><span
                                             class="after">Buat
                                             Akun</span></i></a>

                                     <ul class="side_drop">

                                         <li><a href="create_guru.php"><i class="fas fa-angle-double-right"></i>Buat
                                                 Akun Guru</a></li>
                                         <li><a href="create_wali.php"><i class="fas fa-angle-double-right"></i>Buat
                                                 Akun Wali Kelas</a>
                                         </li>
                                         <li><a href="create_staff.php"><i class="fas fa-angle-double-right"></i>Buat
                                                 Akun Staff</a>
                                         </li>

                                     </ul>
                                 </li>




                                 <li class="has-sub"><a href="tentang.php"><i class="fas fa-address-card"></i><span
                                             class="after">Tentang
                                             Akun</span></i></a>

                                     <ul class="side_drop">

                                         <li><a href="tentang_guru.php"><i
                                                     class="fas fa-angle-double-right"></i>Tentang Akun Guru</a></li>
                                         <li><a href="tentang_wali.php"><i
                                                     class="fas fa-angle-double-right"></i>Tentang Akun Wali Kelas</a>
                                         </li>
                                         <li><a href="tentang_staff.php"><i
                                                     class="fas fa-angle-double-right"></i>Tentang Akun Staff</a>
                                         </li>

                                     </ul>
                                 </li>
                <li><a href="../config/logout.php" onclick="logout()"><i class="fas fa-power-off"></i>Log Out</a></li>

            </ul>



        </div>
    </nav>
    <div class="konten">
        <div class="form-box-tentang">
            <form action="">
                <center>
                    <label for="">Cari Akun Wali Kelas</label>
                </center>
                <br>
                <input type="text" placeholder="Masukan NIP"><i class="fas fa-search"></i>

            </form>
            <div class="form-search">
                <img src="../asset/img/nataz.jpg">
                <form action="">

                    <label for="">
                        Nama
                    </label>

                    <input type="text">

                    <label for="">NIP</label>

                    <input type="text">

                    <label for="">Email</label>

                    <input type="email">
                </form>

            </div>
        </div>

    </div>







</body>

</html>