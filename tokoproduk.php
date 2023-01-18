<?php
error_reporting(0);
session_start();
//koneksi database
include 'koneksi.php';
$id = $_GET['id'];
if($id=='Matic')
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Matic'");
}
elseif($id=='Sport') 
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Sport'");
}
elseif($id=='Enduro') 
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Enduro'");
}
elseif($id=='Naked') 
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Naked'");
}
elseif($id=='Retro') 
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Retro'");
}
elseif($id=='Cruiser') 
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Cruiser'");
}
elseif($id=='Tour') 
{
    $ambil = $koneksi->query("SELECT * FROM produk WHERE kategori_produk='Tour'");
}
else
{
    $ambil = $koneksi->query("SELECT * FROM produk");
}
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

<?php include 'navbar.php'; ?>

<!-- mini navbar -->
<!-- <div style="background-color: #111111; width:100%; height:60px; margin-top: -20px;">
    <div class="mininavbar">
        <ul class="nav navbar-nav">
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Ducati1.png">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Bmw1.png" style="margin-left:3px;margin-top:3px;">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Harley1.png" style="height:35px;margin-top:0px;">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Ktm2.png">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Kawasaki.png" style="width:22px;height:22px;margin-left:7px;margin-top:6px;">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Aprilia1.png" style="margin-top:3px;">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Honda1.png" style="width:22px;height:22px;margin-left:6px;margin-top:6px;">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Yamaha2.png" style="margin-top:3.5px;">
            </div></div></li>
            <li><div class="circle-outline"><div class="circle">
                        <img class="mininavbar-inside" src="img/tokoproduk/logo/Suzuki2.png">
            </div></div></li>
        </ul>
    </div>
</div> -->
<!-- mini navbar -->

<!-- content -->
<section class="content">
    <div class="container container-mid">
        <div class="header">
            <img class="wp" src="img/tokoproduk/wp1.png">
            <img class="bike1" src="img/tokoproduk/BIKE.png">
            <div class="bike2">Discover The Machine Which Present Freedom For You</div>
            <div style="height:2px;border:none;color:#02EF02;background-color:#02EF02;"></div>
        </div>
        <div class="mid">
            <div class="mid-header" style="height:100px;width:1354px;border:none;color:#0F0F0F;background-color:#0F0F0F;margin-top:2px;margin-left:-110px;">
                <ul class="nav navbar-nav" style="color:white;font-weight:bold; margin-left: 290px;">
                    <li><div class="kategory"><a href="tokoproduk.php?id=Matic"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/MATIC.png" style="transform: scaleX(-1);"> 
                    </div></div>
                    &nbsp&nbsp&nbspMATIC</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php?id=Sport"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/SPORT.png" style="transform: scaleX(-1);width:70px;margin-left:-8px;"> 
                    </div></div>
                    &nbsp&nbsp&nbspSPORT</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php?id=Enduro"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/ENDURO.png" style="transform: scaleX(-1);margin-left:-2px;margin-top:4px;"> 
                    </div></div>
                    &nbspENDURO</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php?id=Naked"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/NAKED.png" style="transform: scaleX(-1);width:77px;margin-left:-7px;margin-top:4px;"> 
                    </div></div>
                    &nbsp&nbsp&nbspNAKED</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php?id=Retro"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/RETRO.png" style="transform: scaleX(-1);width:65px;margin-left:-9px;margin-top:5px;"> 
                    </div></div>
                    &nbsp&nbsp&nbspRETRO</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php?id=Cruiser"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/CRUISER.png" style="transform: scaleX(-1);width:72px;margin-left:4px;margin-top:6px;"> 
                    </div></div>
                    &nbspCRUISER</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php?id=Tour"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/TOUR.png" style="transform: scaleX(-1);width:57px;margin-left:2px;margin-top:6px;"> 
                    </div></div>
                    &nbsp&nbsp&nbsp&nbspTOUR</a></div>
                    </li>
                    <li><div class="kategory"><a href="tokoproduk.php"><div class="circle-outline2"><div class="circle2">
                        <img class="category" src="img/tokoproduk/icon/ALL.png" style="width:57px;margin-left:4px;">
                    </div></div>
                    SHOW ALL</a></div>
                    </li>
                </ul>
            </div>
            <div class="mid-content" style="margin-top: 25px;">
                <div class="row">
                <?php while($perproduk = $ambil->fetch_assoc()){ ?>

                    <div class="col-md-4" style="overflow-x:hidden;overflow-y:hidden; margin-bottom:25px;">
                        <div class="content-header">
                            <a href="">
                            <img style="margin-left:10px;width:300px;height:180px;opacity:60%;" src="foto_produk/<?php echo $perproduk['foto_produk']; ?>">
                        </div>
                        <div class="content-mid">
                            <div class="content-text1"><?php echo $perproduk['nama_produk']; ?></div></a>
                            <div class="content-square"><div class="content-text2"><?php echo $perproduk['power_produk']; ?></div></div>
                            <div class="content-square"><div class="content-text2"><?php echo $perproduk['torque_produk']; ?></div></div>
                            <div class="content-square"><div class="content-text2"><?php echo $perproduk['silinder_produk']; ?></div></div>
                            <div class="content-square"><div class="content-text2"><?php echo $perproduk['cc_produk']; ?></div></div>
                            <div class="content-square2"><div class="content-text2"><?php echo $perproduk['berat_produk']; ?></div></div>
                            <div class="content-square2"><div class="content-text2"><?php echo $perproduk['tinggi_produk']; ?></div></div>
                            <div class="content-square2"><div class="content-text2"><?php echo $perproduk['bensinrata_produk']; ?></div></div>
                            <div class="content-square2"><div class="content-text2"><?php echo $perproduk['topspeed_produk']; ?></div></div>
                            <div class="content-text5"><?php echo $perproduk['deskripsi_produk']; ?></div>
                            <div class="content-text3">Rp.<?php echo number_format($perproduk['harga_produk'],2,',','.'); ?>,-</div>
                            <div class="content-text4"><a style="color:#02EF02;" href="beli.php?id=<?php echo $perproduk['id_produk']; ?>">add to cart >></a></div>
                        </div>
                        <div class="content-underlined"></div>
                    </div>

                <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->

<!-- footer -->
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
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
    .wp {
        width: 100%;
        height: 570px;
    }
    .bike1 {
        width:100px;
        position: absolute;
        margin-left: -300px;
        margin-top: 200px;
    }
    .bike2 {
        width: 250px;
        font-size: 18px;
        color: #E1E1E1;
        text-align: center;
        position: absolute;
        margin-left: 980px;
        margin-top: -320px;
    }
    .mininavbar {
        font-size: 14px; 
        color: white; 
        position: absolute;
        margin-left: 425px;
        margin-top: 5px;
    }
    .mininavbar-inside {
        width: 28px;
        height: 28px;
        margin-left: 3.5px;
        margin-top: 5px;
    } 
    .circle-outline {
        background: transparent;
        border:2px solid #02EF02;
        border-radius: 50%;
        width: 45px;
        height: 45px;
        margin-top: 2.5px;
        margin-right: 10px;
    }
    .circle {
        background: #00C600;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        margin-left: 2.5px;
        margin-top: 3px;
        opacity: 70%;
    }
    .circle-outline2 {
        background: transparent;
        border:2px solid #02EF02;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        margin-top: 7px;
    }
    .circle2 {
        background: #00C600;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        margin-left: 3px;
        margin-top: 3px;
        opacity: 70%;
    }
    .circle-text2 {
        font-weight: bold;
        margin-left: 10px;
    }
    .category {
        width: 60px;
        margin-top: 10px;
    }
    .kategory {
        margin-right: 30px;
        position: relative;
    }
    .content-header {
        background-color: black;
        max-width: 90%;
        max-height: 35%;
        box-shadow: 0px -2px 4px #131313;
        margin-top: 25px;
    }
    .content-mid {
        background-color: #111111;
        max-width: 90%;
        height: 300px;
        box-shadow: 0px 3px 2px #202020;
    }
    .img-hover {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }
    .img-text {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }
    .content-text1 {
        color: white;
        font-weight: bold;
        font-size: 17px;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 5px;
    }
    .content-text2 {
        color: #DBDBDB;
        font-size: 12px;
        padding-left: 20px;
        padding-right: 10px;
        margin-top: 5px;
        padding-top: -5px;
        width: 800px;
    }
    .content-text3 {
        color: #C4C4C4;
        font-size: 17px;
        font-weight: bold;
        padding-right: 15px;
        padding-top: 10px;
        text-align: right;
    }
    .content-text4 {
        color: #08FF00;
        font-size: 13px;
        font-weight: bold;
        padding-left: 222px;
    }
    .content-text5 {
        color: white;
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        padding-left: 30px;
        margin-top: -60px;
        position: absolute;
        width: 300px;
    }
    .content-square {
        background-color: #C4C4C4;
        width: 15px;
        height: 15px;
        margin-top: 10px;
        margin-left: 10px;
        margin-bottom: 10px;
        opacity: 80%;
    }
    .content-square2 {
        background-color: #C4C4C4;
        width: 15px;
        height: 15px;
        margin-top: -100px;
        margin-left: 170px;
        margin-bottom: 110px;
        opacity: 80%;
    }
    .content-underlined {
        height:1px;
        border:none;
        color:#02EF02;
        background-color:#02EF02;
        width:324px;
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
    color: #888888;
    background-color: #222222;
    }
</style>
