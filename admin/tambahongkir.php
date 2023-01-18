<div>
    <h2>Tambah Kurir</h2>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" required>
        </div>
        <div class="form-group">
            <label>Tarif Harga</label>
            <input type="text" class="form-control" name="Tarif" required>
        </div>
        <button class="btn btn-primary" name="save">Simpan</button> </p>
    </form>
    <?php
    if (isset($_POST['save']))
    {
        $koneksi->query("INSERT INTO ongkir
            (nama_kurir,tarif)

            VALUES('$_POST[Nama]','$_POST[Tarif]')");

        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=ongkir'>";
    }
    ?>
</div>