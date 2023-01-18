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
<img style="position:absolute;width:100%;height:118%;opacity:40%;" src="img/login/hd/HD4 1.jpg">
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
                <div class="mid-header">
                    <table class="bordered">
                        <tr class="mid-text" style="color:white;">
                            <td>Create Ducoto ID Account</td>
                        </tr>
                        <form method="post" enctype="multipart/form-data">
                        <tr style="font-size:15px;color:white;">
                        <div class="form-group">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:20px;" 
                            type="email" class="form-control" name="email" placeholder="Email Address" required></td>
                        </div>
                        </tr>
                        <div class="form-group">
                        <tr style="font-size:15px;color:white;">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;" 
                            type="password" class="form-control" name="password" placeholder="password" required></td>
                        </div>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                        <div class="form-group">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;" 
                            type="text" class="form-control" name="nama" placeholder="Username" required></td>
                        </div>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                        <div class="form-group">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;" 
                            type="text" class="form-control" name="telepon" placeholder="Telephone" required></td>
                        </div>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                        <div class="form-group">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;" 
                            type="text" class="form-control" name="alamat" placeholder="Alamat" required></td>
                        </div>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                        <div class="form-group">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;" 
                            type="text" class="form-control" name="kota" placeholder="Kota" required></td>
                        </div>
                        </tr>
                        <tr style="font-size:15px;color:white;">
                        <div class="form-group">
                            <td><input style="width:100%;height:43px;background-color:#000000;border:none;padding-left:15px;box-shadow: 0px 0px 1px 1px #030303;margin-top:10px;margin-bottom:45px;" 
                            type="text" class="form-control" name="kode" placeholder="Kode Pos" required></td>
                        </div>
                        </tr>
                        <tr>
                            <td><button name="daftar" style="opacity:60%;background-color:#32E832;width:100%;height:37px;margin-bottom:15px;
                                padding-top:2px;text-align:center;color:#141414;font-size:15px;border:0px;border-radius:2px;">
                                <B>REGISTER</B>
                            </button></td>
                        <tr>
                            <td><img style="width:311px;margin-top:5px;margin-bottom:25px;" src="img/login/p1.png"></td>
                            <div style="position:absolute;margin-top:511px;margin-left:150px;font-size:17px;">or</div>
                        </tr>
                        <tr>
                            <td><a href="login.php"><div style="opacity:80%;background-color:transparent;width:100%;height:37px;margin-bottom:35px;
                                padding-top:9px;text-align:center;color:#AEAEAE;font-size:15px;border: 1px solid #AEAEAE;">
                                ALREADY HAVE AN ACCOUNT?
                            </div></a></td>
                        <tr>
                        </form>
                        <?php 
                        if (isset($_POST["daftar"]))
                        {
                            // cek email dah digunakan or no
                            $ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok==1)
                            {
                                echo "<script>alert('gagal, email sudah digunakan');</script>";
                                echo "<script>location='register.php';</script>";
                            }
                            else 
                            {    
                                // insert ke table
                                $koneksi->query("INSERT INTO pelanggan
                                    (email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan,kota_pelanggan,kode_pelanggan)

                                    VALUES('$_POST[email]','$_POST[password]','$_POST[nama]','$_POST[telepon]','$_POST[alamat]','$_POST[kota]','$_POST[kode]')");
                                
                                echo "<script>alert('daftar sukses, silahkan login');</script>";
                                echo "<script>location='login.php';</script>";
                            }
                        }
                        ?>    
                    </tr>
                    </table>
                </div>
        </div>
    </div>
</section>
<!-- content -->

<!-- footer -->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center" style="margin-top:32px;">
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
        margin-top: -40px;
        margin-left: 35%;
        padding-bottom: 1px;
        padding-top:10px;
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
