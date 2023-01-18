<!-- navbar -->
<nav class="navbar navbar-default" style="width:100%; height:50px; background-color: #222222;">
    <div class="container">
        <ul class="nav navbar-nav" style="margin-left:255px;">
            <li><a class="b" href="index.php"><img style="width:100px;" src="icon/DUCOTO.png"></a></li>
            <li><a class="a" href="produk.php">PRODUCTS</a></li>
            <li><a class="a" href="tokoproduk.php">STORE</a></li>
            <li><a class="a" href="riwayat.php">HISTORY</a></li>
            <li><a class="a" href="keranjang.php"><img style="width:20px;" src="icon/cart1.png"></a></li>
            <li><a class="a" href=""><img style="width:20px;" src="icon/search1.png"></a></li>
            <!-- jk sudah login(ada session pelanggan) -->
            <?php if (isset($_SESSION["pelanggan"])) : ?> 
                <li>
                    <div class="dropdown">
                        <span><a class="a" style="color: white;"><?php echo $_SESSION["pelanggan"]['nama_pelanggan']?></a></span>
                            <div class="dropdown-content">
                            <p style="color:white"><a class="a" href="">Profile</a></p>
                            <p>
                            <?php if (isset($_SESSION["pelanggan"])) : ?> 
                                <a class="a" href="logout.php">Logout</a>
                                <!-- jk belum login -->
                                <?php else: ?>
                                <a class="c" href="login.php">LOGIN</a>
                            <?php endif ?></p>
                        </div>
                    </div>
                </li>
                <!-- jk belum login -->
                <?php else: ?>
                <a class="dropdown" href="login.php" style="font-size:17px;"><b>LOGIN</b></a>
            <?php endif ?>
        </ul>
    </div>
</nav>
<!-- navbar -->

<style scoped lang="scss">
.dropdown {
    position: relative;
    display: inline-block;
    margin-top: 15px;
    margin-left: 5px;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #222222;
    color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
    }

    .dropdown:hover .dropdown-content {
    display: block;
    }
</style>