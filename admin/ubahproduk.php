<div>
    <h2>Ubah Produk</h2>
    <?php
    $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
    ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" class="form-control" name="Nama" value="<?php echo $pecah['nama_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="Kategori">
                <option><?php echo $pecah['kategori_produk']; ?></option>
                <option>Matic</option>
                <option>Sport</option>
                <option>Enduro</option>
                <option>Naked</option>
                <option>Retro</option>
                <option>Cruser</option>
                <option>Tour</option>
            </select>
        </div>
        <div class="form-group">
            <label>Brand</label>
            <select class="form-control" name="Brand">
                <option><?php echo $pecah['brand_produk']; ?></option>
                <option>Ducati</option>
                <option>Kawasaki</option>
                <option>Bmw</option>
                <option>Yamaha</option>
                <option>Honda</option>
                <option>Aprilia</option>
                <option>Ktm</option>
            </select>
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" class="form-control" name="Harga" value="<?php echo $pecah['harga_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Power</label>
            <input type="text" class="form-control" name="Power" value="<?php echo $pecah['power_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Torque</label>
            <input type="text" class="form-control" name="Torque" value="<?php echo $pecah['torque_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Silinder</label>
            <input type="text" class="form-control" name="Silinder" value="<?php echo $pecah['silinder_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Bensin Rata Rata</label>
            <input type="text" class="form-control" name="Bensin_Rata_Rata" value="<?php echo $pecah['bensinrata_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Bensin Full</label>
            <input type="text" class="form-control" name="Bensin_Full" value="<?php echo $pecah['bensinfull_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Tinggi</label>
            <input type="text" class="form-control" name="Tinggi" value="<?php echo $pecah['tinggi_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Berat</label>
            <input type="text" class="form-control" name="Berat" value="<?php echo $pecah['berat_produk']; ?>">
        </div>
        <div class="form-group">
            <label>CC</label>
            <input type="text" class="form-control" name="CC" value="<?php echo $pecah['cc_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Mesin</label>
            <input type="text" class="form-control" name="Mesin" value="<?php echo $pecah['mesin_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Top Speed</label>
            <input type="text" class="form-control" name="Top_Speed" value="<?php echo $pecah['topspeed_produk']; ?>">
        </div>
        <div class="form-group">
            <label>Deskripsi</label>
            <textarea name="Deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_produk']; ?></textarea>
        </div>
        <div class="form-group">
            <label>Foto Produk</label> <br>
            <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="500">
            <input type="file" class="form-control" name="foto_produk" value="<?php echo $pecah['foto_produk']; ?>">
        </div>
        <button class="btn btn-primary" name="ubah">Ubah</button> </p>
    </form>
    <?php
    if (isset($_POST['ubah']))
    {
        $namafoto = $_FILES['foto_produk']['name'];
        $lokasifoto = $_FILES['foto_produk']['tmp_name'];

        if (!empty($lokasifoto))
        {
            move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

            $koneksi->query("UPDATE produk SET nama_produk='$_POST[Nama]',kategori_produk='$_POST[Kategori]',brand_produk='$_POST[Brand]',
                harga_produk='$_POST[Harga]',power_produk='$_POST[Power]',torque_produk='$_POST[Torque]',
                silinder_produk='$_POST[Silinder]',bensinrata_produk='$_POST[Bensin_Rata_Rata]',
                bensinfull_produk='$_POST[Bensin_Full]',tinggi_produk='$_POST[Tinggi]',
                berat_produk='$_POST[Berat]',cc_produk='$_POST[CC]',mesin_produk='$_POST[Mesin]',
                topspeed_produk='$_POST[Top_Speed]',deskripsi_produk='$_POST[Deskripsi]',foto_produk='$namafoto' 
                WHERE id_produk='$_GET[id]'");
        }
        else
        {
            $koneksi->query("UPDATE produk SET nama_produk='$_POST[Nama]',kategori_produk='$_POST[Kategori]',brand_produk='$_POST[Brand]',
                harga_produk='$_POST[Harga]',power_produk='$_POST[Power]',torque_produk='$_POST[Torque]',silinder_produk='$_POST[Silinder]',
                bensinrata_produk='$_POST[Bensin_Rata_Rata]',bensinfull_produk='$_POST[Bensin_Full]',
                tinggi_produk='$_POST[Tinggi]',berat_produk='$_POST[Berat]',cc_produk='$_POST[CC]',
                mesin_produk='$_POST[Mesin]',topspeed_produk='$_POST[Top_Speed]',
                deskripsi_produk='$_POST[Deskripsi]' WHERE id_produk='$_GET[id]'");
        }
        echo "<script>alert('Data Produk Telah Diubah');</script>";
        echo "<script>location='index.php?halaman=produk';</script>";
    }
    ?>
</div>