<?php

$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pembelian WHERE id_pembelian='$_GET[id]'");

echo "<script>alert('Pembelian Terhapus');</script>";
echo "<script>location='index.php?halaman=pembelian';</script>";

?>