<?php
session_start();
//koneksi database
include 'koneksi.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUCOTO</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="icon/favicon.png"/>
</head>
<body>
<img style="position:absolute;width:100%;height:100%;opacity:40%;" src="img/login/hd/HD4 1.jpg">
<!-- navbar -->
<nav class="navbar navbar-default" style="width:100%; height:50px; background-color: transparent;">
    <div class="container">
        <ul class="nav navbar-nav" style="margin-left:175px;">
            <li><a class="b" href="index.php"><img style="width:100px;" src="icon/DUCOTO.png"></a></li>
        </ul>
    </div>
</nav>
<!-- navbar -->

<!-- content -->
<section class="content">
    <div class="container container-mid">
        <div class="mid">
            <form method="post">
                <div class="mid-header">
                    <table class="bordered">
                        <tr class="mid-text" style="color:white;">
                            <td>Log In Ducoto ID</td>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:15px;" 
                            type="email" class="form-control" placeholder="Email Address" name="email"></td>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;margin-bottom:45px;" 
                            type="password" class="form-control" placeholder="Password" name="password"></td>
                        </tr>
                        <tr>
                            <td><button style="opacity:60%;background-color:#32E832;width:100%;height:37px;margin-bottom:15px;
                                padding-top:2px;text-align:center;color:#141414;font-size:15px;border:0px;border-radius:2px;"
                                name="simpan">
                                <B>LOG IN</B>
                            </button></td>
                        <tr>
                            <td><img style="width:311px;margin-top:5px;margin-bottom:25px;" src="img/login/p1.png"></td>
                            <div style="position:absolute;margin-top:236px;margin-left:150px;font-size:17px;">or</div>
                        </tr>
                        <tr>
                            <td><a href="register.php"><div style="opacity:80%;background-color:transparent;width:100%;height:37px;margin-bottom:35px;
                                padding-top:9px;text-align:center;color:#AEAEAE;font-size:15px;border: 1px solid #AEAEAE;">
                                REGISTER A NEW ACCOUNT
                            </div></a></td>
                        <tr>
                    </tr>
                    </table>
                </div>
            </form>

            <?php
            //tombol simpan klik
            if (isset($_POST["simpan"])) 
            {

                $email = $_POST["email"];
                $password = $_POST["password"];
                //lakukan query cek akun di tabel pelanggan
                $ambil = $koneksi->query("SELECT * FROM pelanggan 
                    WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

                //hitung akun yang terambil
                $akunyangcocok = $ambil->num_rows;

                //jika 1 akun cocok, login
                if ($akunyangcocok==1) 
                {
                    //login
                    $akun = $ambil->fetch_assoc();
                    //simpan di session pelanggan
                    $_SESSION["pelanggan"] = $akun;
                    echo "<script>alert('login berhasil');</script>";
                    echo "<script>location='index.php';</script>";
                }
                else 
                {
                    //gagal login
                    echo "<script>alert('anda gagal login, periksa akun anda');</script>";
                    echo "<script>location='login.php';</script>";
                }
            }

            ?>

        </div>
    </div>
</section>
<!-- content -->

<!-- footer -->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center" style="margin-top:120px;">
      <small>Copyright © 2020 Ducoto Inc. All rights reserved. | Legal Terms | Privacy Policy | Cookie Policy</small>
    </div>
  </footer>
<!-- footer -->

</body>
</html>

<style scoped lang="scss">
    a.a { font-size:17px; font-weight: bold; margin-top: 3px; }
     .b { margin-top: -1px; }

    .navbar.navbar-default {
        background-color: #99ccff;
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .header {
        background-color: black;
        margin-left: -115px;
        width: 119.2%;
        height: 570px;
    }
    .content-header {
        background-color: black;
        max-width: 90%;
        max-height: 35%;
        box-shadow: 0px -2px 4px #131313;
        margin-top: 25px;
    }
    .mid-header {
        height: auto;
        width: 32%;
        background-color: #222222;
        box-shadow: 0px 0px 2px 1px #2E2E2E;
        opacity: 97%;
        margin-top: 0px;
        margin-left: 35%;
        padding-bottom: 1px;
        padding-top: 40px;
        padding-left: 25px;
        padding-right: 25px;
    }
    .mid-text {
        color: white;
        font-size: 20px;
        font-weight: bold;
    }
    

    a:link {
        color: white;
    }
    /* visited link */
    a:visited {
        color: white;
    }
    /* mouse over link */
    a:hover {
        color: #02EF02;
        text-decoration: none;
    }
    /* selected link */
    a:active {
        color: blue;
    }

    /* Sticky Footer Classes */

    html,
    body {
    height: 100%;
    color: white;
    background-color: black;
    }
</style>
