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

<!-- content -->
<section class="content">
    <div class="container container-mid">
        <div class="mid">
            <form method="post">
            <div class="mid-header">
                Information User
            </div>
            <div class="mid-content">
                <div class="row">
                    <div class="content-mid">
                        <table class="bordered">
                            <thead>
                                <tr>
                                    <td><div style="background-color:white;width:764px;margin-top:10px;height:3px;"></div></td>
                                </tr>
                                <tr>
                                    <td><div class="content-text1" style="margin-bottom:5px;">
                                    Email Address</div></td>
                                </tr>
                                <tr style="font-size:15px;color:white;">
                                    <td><input style="opacity:85%;width:100%;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;" 
                                    type="email" class="form-control" value="<?php echo $_SESSION["pelanggan"]
                                    ['email_pelanggan']?>" readonly name="email" required></td>
                                </tr>
                                <tr>
                                    <td><div class="content-text1" style="margin-bottom:5px;">
                                    Name</div></td>
                                </tr>
                                <tr style="font-size:15px;color:white;">
                                    <td><input style="opacity:85%;width:100%;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;" 
                                    type="text" class="form-control" value="<?php echo $_SESSION["pelanggan"]
                                    ['nama_pelanggan']?>" readonly name="nama" required></td>
                                </tr>
                                <tr>
                                    <td><div class="content-text1" style="margin-bottom:5px;">
                                    Street Address</div></td>
                                </tr>
                                <tr style="font-size:15px;color:white;">
                                    <td><input style="opacity:85%;width:100%;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;" 
                                    type="text" class="form-control" value="<?php echo $_SESSION["pelanggan"]
                                    ['alamat_pelanggan']?>" readonly name="alamat" required></td>
                                </tr>
                                <tr>
                                    <td><div class="content-text1" style="margin-bottom:5px;">
                                    City*</div></td>
                                    <td><div class="content-text1" style="margin-bottom:5px; margin-left:-360px;">
                                    Zip Code*</div></td>
                                </tr>
                                <tr style="font-size:15px;color:white;">
                                    <td><input style="opacity:85%;width:47%;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;" 
                                    type="text" class="form-control" readonly value="<?php echo $_SESSION["pelanggan"]
                                    ['kota_pelanggan']?>" readonly name="kota" required></td>
                                    <td><input style="opacity:85%;width:360px;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;
                                    margin-left:-360px;" 
                                    type="text" class="form-control" readonly value="<?php echo $_SESSION["pelanggan"]
                                    ['kode_pelanggan']?>" readonly name="kode" required></td>
                                </tr>
                                <tr>
                                    <td><div class="content-text1" style="margin-bottom:5px;">
                                    Telephone</div></td>
                                </tr>
                                <tr style="font-size:15px;color:white;">
                                    <td><input style="opacity:85%;width:100%;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;" 
                                    type="text" class="form-control" readonly value="<?php echo $_SESSION["pelanggan"]
                                    ['telepon_pelanggan']?>" name="telepon" required></td>
                                </tr>
                                <tr>
                                    <td><div style="background-color:#6B6B6B;width:764px;margin-bottom:10px;margin-top:10px;height:3px;"></div></td>
                                </tr>
                                <tr>
                                    <td><div style="opacity:90%;width:100%;height:60px;padding-left:15px;
                                    color:#02EF02;font-size:25px;font-weight:bold;background-color:#202020;
                                    padding-top:12px;padding-left:15px;">Shipping Method</div></td>
                                </tr>
                                <tr>
                                    <td><div class="content-text1" style="margin-bottom:5px;">
                                    Choose Courir</div></td>
                                </tr>
                                <tr style="font-size:15px;color:white;">
                                    <td><select style="opacity:85%;width:100%;height:43px;background-color:#3B3B3B;border:none;
                                    padding-left:15px;box-shadow:0px 0px 0px 1px #3B3B3B;border-radius:1px;color:white;" 
                                    type="text" class="form-control" value="" name="id_ongkir" required>
                                        <?php 
                                            $ambil = $koneksi->query("SELECT * FROM ongkir");
                                            while($perongkir = $ambil->fetch_assoc()) {
                                        ?>
                                            <option value="<?php echo $perongkir["id_ongkir"] ?>">
                                                <?php echo $perongkir['nama_kurir'] ?> -
                                                Rp.<?php echo number_format($perongkir['tarif'],0,',','.') ?>,-
                                            </option>
                                        <?php } ?>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td><div style="background-color:white;width:764px;margin-bottom:80px;margin-top:10px;height:3px;"></div></td>
                                </tr>
                            </thead>   
                        </table>
                    </div>
                </div>
            </div>

            <div class="mid-right">

                <table class="bordered">
                    <tr>        
                        <td class="content-text1" style="padding-right:0px;padding-top:0px;padding-bottom:20px;font-size:22px;color:#02EF02;">Cart Summary</td>
                    </tr>
                    <tr>
                        <td><div style="background-color:#3D3D3D;width:255px;margin-left:10px;height:3px;margin-bottom:10px;"></div></td>
                    </tr>

                    <?php $totalbelanja = 0; ?>
                    <?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                    <!-- tampil produk w id produk -->
                    <?php
                        $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                        $pecah = $ambil->fetch_assoc();
                        $subharga = $pecah["harga_produk"]*$jumlah;
                    ?>
                    <tr>
                        <td><img style="width:80px;" src="foto_produk/<?php echo $pecah['foto_produk'];?>"></td>
                        <td><div style="margin-left:-190px;color:white;font-size:12px;width:40px;">
                        <?php echo $pecah['nama_produk'];?> 
                        <div style="margin-bottom:10px;padding-top:5px;color:#02EF02;">Qty <?php echo $jumlah;?></div></div></td>
                        <td><div style="margin-left:-105px;font-size:12px;color:white;margin-top:-38px;">
                            Rp.<?php echo number_format($subharga,0,',','.')?>,-</div>
                        </td>
                    </tr>

                    <?php $totalbelanja+=$subharga; ?>   
                    <?php endforeach ?>
                    
                    <tr>
                        <td><div style="background-color:#3D3D3D;width:255px;margin-left:10px;height:3px;margin-bottom:20px;"></div></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:14px;padding-right:0px;"><b>Subtotal*</b>
                        <b style="float:right;margin-bottom:5px;">Rp.<?php echo number_format($totalbelanja,0,',','.') ?>,-</b></td>
                    </tr>
                    <tr>
                        <td style="font-size:14px;padding-right:0px;"><b>Shipping*</b>
                        <b style="float:right;margin-bottom:20px;">?????</b></td>
                    </tr>
                    <tr>
                        <td style="color:white;font-size:15px;padding-right:0px;"><b>TOTAL</b>
                        <b style="float:right;margin-bottom:20px;">Rp.?????</b></td>
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
                        <td><button name="beli" style="border:0px;background-color:transparent;">
                            <div style="background-color:#32E832;width:255px;margin-left:10px;
                            height:45px;margin-bottom:5px;border-radius:10px;
                            padding-top:12px;text-align:center;color:#141414;font-size:18px;">
                            BUY
                        </div></button></td>
                    </tr>
                    <tr>
                        <td><div style="width:255px;margin-left:10px;height:50px;margin-bottom:20px;border-radius:10px;
                            padding-top:14px;text-align:center;color:#141414;font-size:18px;">
                            <a href="tokoproduk.php" style="color:#02EF02;">BACK SHOPPING</a>
                        </div></td>
                    </tr>
                </table>
            </div>
            </form>

            <?php 
            if (isset($_POST["beli"])) 
            {
                $id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
                $id_ongkir = $_POST["id_ongkir"];
                $tanggal_pembelian = date("Y-m-d");

                $ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
                $arrayongkir = $ambil->fetch_assoc();
                $nama_kurir = $arrayongkir['nama_kurir'];
                $tarif = $arrayongkir['tarif'];

                $total_pembelian = $totalbelanja + $tarif;


                //1. menyimpan data ke table pembelian
                $koneksi->query("INSERT INTO pembelian (id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian,nama_kurir,tarif)
                                VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian','$nama_kurir','$tarif')");
                
                //2. dapat id pembelian
                $id_pembelian_barusan = $koneksi->insert_id;
                
                foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
                {
                    // dapat data prodyk berdasar id_produk
                    $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                    $perproduk = $ambil->fetch_assoc();

                    $nama = $perproduk['nama_produk'];
                    $harga = $perproduk['harga_produk'];
                    $foto = $perproduk['foto_produk'];

                    $subharga = $perproduk['harga_produk']*$jumlah;

                    $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,nama,harga,subharga,foto,jumlah)
                                VALUES ('$id_pembelian_barusan','$id_produk','$nama','$harga','$subharga','$foto','$jumlah')");
                }

                //3. kosongkan keranjang belanja

                unset($_SESSION["keranjang"]);

                //4. tampilan ke halaman nota
                echo "<script>alert('pembelian sukses');</script>";
                echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";
            }
            ?>

            

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
        margin-top: 15px;
        margin-left: -15px;
        padding-top: 12px;
        padding-left: 15px;
    }
    .mid-right {
        height: auto;
        width: 27%;
        color:#02EF02;
        font-size: 25px;
        font-weight: bold;
        background-color: #202020;
        opacity: 90%;
        margin-top: -718px;
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
