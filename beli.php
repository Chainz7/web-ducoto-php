<?php
session_start();
//get id
$id_produk = $_GET['id'];

//jika ada produk di cart, maka di +1
if (isset($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk]+=1;
}

//selain itu maka produk di +1
else
{
    $_SESSION['keranjang'][$id_produk] = 1;
}

//keranjang
echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
echo "<script>location='tokoproduk.php';</script>";
?>