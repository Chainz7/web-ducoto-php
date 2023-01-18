<div>
    <h2>Tambah Produk</h2>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="Kategori" required>
                <option>Matic</option>
                <option>Sport</option>
                <option>Enduro</option>
                <option>Naked</option>
                <option>Retro</option>
                <option>Cruiser</option>
                <option>Tour</option>
            </select>
        </div>
        <div class="form-group">
            <label>Brand</label>
            <select class="form-control" name="Brand" required>
                <option>Ducati</option>
                <option>Kawasaki</option>
                <option>Bmw</option>
                <option>Yamaha</option>
                <option>Honda</option>
                <option>Aprilia</option>
                <option>Ktm</option>
                <option>Harley</option>
            </select>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" class="form-control" name="Harga" required>
        </div>
        <div class="form-group">
            <label>Power</label>
            <input type="text" class="form-control" name="Power" value=" HP" required>
        </div>
        <div class="form-group">
            <label>Torque</label>
            <input type="text" class="form-control" name="Torque" value=" Nm" required>
        </div>
        <div class="form-group">
            <label>Silinder</label>
            <input type="text" class="form-control" name="Silinder" required>
        </div>
        <div class="form-group">
            <label>Bensin Rata Rata</label>
            <input type="text" class="form-control" name="Bensin_Rata_Rata" value=" km/l" required>
        </div>
        <div class="form-group">
            <label>Bensin Full</label>
            <input type="text" class="form-control" name="Bensin_Full" value=" litres" required>
        </div>
        <div class="form-group">
            <label>Tinggi</label>
            <input type="text" class="form-control" name="Tinggi" value=" mm" required>
        </div>
        <div class="form-group">
            <label>Berat</label>
            <input type="text" class="form-control" name="Berat" value=" kg" required>
        </div>
        <div class="form-group">
            <label>CC</label>
            <input type="text" class="form-control" name="CC" value=" CC" required>
        </div>
        <div class="form-group">
            <label>Mesin</label>
            <input type="text" class="form-control" name="Mesin" required>
        </div>
        <div class="form-group">
            <label>Top Speed</label>
            <input type="text" class="form-control" name="Top_Speed" value=" kmh" required>
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" rows="10" name="Deskripsi" required></textarea>
        </div>
        <div class="form-group">
            <label>Foto Produk</label>
            <input type="file" class="form-control" name="foto_produk" required>
        </div>
        <button class="btn btn-primary" name="save">Simpan</button> </p>
    </form>
    <?php
    if (isset($_POST['save']))
    {
        $Nama = $_FILES['foto_produk']['name'];
        $lokasi = $_FILES['foto_produk']['tmp_name'];
        move_uploaded_file($lokasi, "../foto_produk/".$Nama);
        $koneksi->query("INSERT INTO produk
            (nama_produk,kategori_produk,brand_produk,harga_produk,power_produk,torque_produk,silinder_produk,bensinrata_produk,bensinfull_produk,
            tinggi_produk,berat_produk,cc_produk,mesin_produk,topspeed_produk,deskripsi_produk,foto_produk)

            VALUES('$_POST[Nama]','$_POST[Kategori]','$_POST[Brand]','$_POST[Harga]','$_POST[Power]','$_POST[Torque]','$_POST[Silinder]','
            $_POST[Bensin_Rata_Rata]','$_POST[Bensin_Full]','$_POST[Tinggi]','$_POST[Berat]','$_POST[CC]','
            $_POST[Mesin]','$_POST[Top_Speed]','$_POST[Deskripsi]','$Nama')");

        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=produk'>";
    }
    ?>
</div>
