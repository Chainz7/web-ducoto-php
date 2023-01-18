<div>
    <h2>Ubah Kurir</h2>
    <?php
    $ambil=$koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
    ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" value="<?php echo $pecah['nama_kurir']; ?>">
        </div>
        <div class="form-group">
            <label>Tarif Harga</label>
            <input type="text" class="form-control" name="Tarif" value="<?php echo $pecah['tarif']; ?>">
        </div>
        <button class="btn btn-primary" name="ubah">Ubah</button> </p>
    </form>
    <?php
    if (isset($_POST['ubah']))
    {
        $koneksi->query("UPDATE ongkir SET nama_kurir='$_POST[Nama]',Tarif='$_POST[Tarif]' WHERE id_ongkir='$_GET[id]'");
        
        echo "<script>alert('Data Kurir Telah Diubah');</script>";
        echo "<script>location='index.php?halaman=ongkir';</script>";
    }
    ?>
</div>