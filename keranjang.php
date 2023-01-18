<?php
session_start();
//koneksi database
include 'koneksi.php';

//jk belum login harus login
if (!isset($_SESSION["pelanggan"])) 
{
    echo "<script>alert('silahkan login');</script>";
    echo "<script>location='login.php';</script>";
}
?>
<?php
if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
{
    echo "<script>alert('keranjang kosong');</script>";
    echo "<script>location='tokoproduk.php';</script>";
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

<!-- mini navbar -->

<!-- content -->
<section class="content">
    <div class="container container-mid">
        <div class="mid">
            <div class="mid-right">
                <table class="bordered">
                    <tr>        
                        <td class="content-text1" style="padding-right:0px;padding-top:0px;padding-bottom:20px;font-size:22px;color:#02EF02;">Cart Summary</td>
                    </tr>
                    <tr>
                        <td><div style="background-color:#3D3D3D;width:255px;margin-left:10px;height:3px;margin-bottom:20px;"></div></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:14px;padding-right:0px;"><b>Subtotal*</b><b style="float:right;margin-bottom:5px;">
                        Rp.?????</b></td>
                    </tr>
                    <tr>
                        <td style="font-size:14px;padding-right:0px;"><b>Shipping*</b><b style="float:right;margin-bottom:20px;">?????</b></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:15px;padding-right:0px;"><b>TOTAL</b><b style="float:right;margin-bottom:20px;">
                        Rp.?????</b></td>
                    </tr>
                    <tr>
                        <td><div style="background-color:white;width:255px;margin-left:10px;height:3px;margin-bottom:20px;"></div></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:16px;text-align:center;"><b>Thank You</b></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:16px;text-align:center;width:30px;"><b>For a product that you choose</b></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:16px;text-align:center;width:30px;"><b>We will delivery your product</b></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:16px;text-align:center;width:30px;"><b>Safely</b></td>
                    </tr>
                    <tr>
                        <td><div style="background-color:white;width:255px;margin-left:10px;height:3px;margin-top:20px;margin-bottom:20px;"></div></td>
                    </tr>
                    <tr>
                        <td><a href="checkout.php"><div style="background-color:#32E832;width:255px;margin-left:10px;height:45px;margin-bottom:5px;border-radius:10px;
                            padding-top:12px;text-align:center;color:#141414;font-size:18px;">
                            CHECKOUT
                        </div></a></td>
                    </tr>
                    <tr>
                        <td><div style="width:255px;margin-left:10px;height:50px;margin-bottom:20px;border-radius:10px;
                            padding-top:14px;text-align:center;color:#141414;font-size:18px;">
                            <a href="tokoproduk.php" style="color:#02EF02;">CONTINUE SHOPPING</a>
                        </div></td>
                    </tr>
                </table>
            </div>
            <div class="mid-header">
                Shopping Cart
            </div>
            <div class="mid-content">
                <div class="row">
                    <div class="content-mid">
                        <table class="table bordered" style="opacity:90%;">
                            <thead>
                            <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                            <!-- tampil produk w id produk -->
                            <?php
                                $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                                $pecah = $ambil->fetch_assoc();
                                $subharga = $pecah["harga_produk"]*$jumlah;
                            ?>
                                <tr>
                                    <td><img style="margin-left:10px;width:200px;height:120px;opacity:90%;margin-right:-150px;" src="foto_produk/<?php echo $pecah['foto_produk']; ?>"></td>
                                    <td><div class="content-text1" style="margin-right:-10px;"><?php echo $pecah["nama_produk"]?></div></td>
                                    <td><div class="content-text1" style="margin-right:-40px;padding-left:10px;">
                                        <?php echo $jumlah;?><div></div>
                                    </div></td>
                                    <td><div class="content-text1">Rp.<?php echo number_format($subharga);?>,-</div></td>
                                    <td><div class="content-text1"style="margin-left:-10px;margin-right:-100px;">
                                        <a href="hapuskeranjang.php?id=<?php echo $id_produk ?>">Delete</a>
                                    </div></td>
                                </tr>
                            <?php endforeach ?>
                            </thead>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- content -->

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
    .mid-header {
        height:60px;
        width: 67%;
        color:#02EF02;
        font-size: 25px;
        font-weight: bold;
        background-color: #202020;
        opacity: 90%;
        margin-top: -455px;
        margin-left: -15px;
        padding-top: 12px;
        padding-left: 15px;
    }
    .mid-right {
        height:auto;
        width: 27%;
        color:#02EF02;
        font-size: 25px;
        font-weight: bold;
        background-color: #202020;
        opacity: 90%;
        margin-top: 15px;
        margin-left: 830px;
        padding-top: 12px;
        padding-bottom: 12px;
        padding-left: 15px;
        padding-right: 15px;
    }
    .content-mid {
        background-color: #111111;
        max-width: 65%;
        opacity: 90%;
        height: auto;
        box-shadow: 0px 2px 2px #171717;
    }
    .content-underlined {
        height:1px;
        border:none;
        background-color: white;
        width: 60%;
    }
    .content-text1 {
        color: white;
        font-weight: bold;
        font-size: 17px;
        padding-left: 0px;
        padding-right: 20px;
        padding-top: 10px;
        width: 50px;
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

    a:link {
        color: #E81616;
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
    background-color: #111111;
    }
</style>
