<div>
    <h2>Detail Pembelian</h2>

    <?php 
    $ambil=$koneksi->query("SELECT * FROM produk WHERE produk.id_produk='$_GET[id]'");
    $detail = $ambil->fetch_assoc();
    ?>
    <strong><?php echo $detail['nama_produk'];?> - <?php echo $detail['kategori_produk'];?> - <?php echo $detail['brand_produk'];?></strong> <br>
    <p>
        Rp. <?php echo $detail['harga_produk']; ?>,-<br>
        <?php echo $detail['deskripsi_produk']; ?>
    </p>
    <?php $ambil=$koneksi->query("SELECT * FROM produk WHERE produk.id_produk='$_GET[id]'"); ?>
        <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <p class="txt1">
        Produk : <br><img style="margin-left:-10px;" src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100"><br>
    </p>
        <?php } ?>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th class="table2">Power</th>
                <th class="table2">Torque</th>
                <th class="table2">Silinder</th>
                <th class="table2">BensinAVG</th>
                <th class="table2">BensinFull</th>
                <th class="table2">Tinggi</th>
                <th class="table2">Berat</th>
                <th class="table2">CC</th>
                <th class="table2">Mesin</th>
                <th class="table2">Topspeed</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM produk WHERE produk.id_produk='$_GET[id]'"); ?>
            <?php while($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['power_produk']; ?></td>
                <td><?php echo $pecah['torque_produk']; ?></td>
                <td><?php echo $pecah['silinder_produk']; ?></td>
                <td><?php echo $pecah['bensinrata_produk']; ?></td>
                <td><?php echo $pecah['bensinfull_produk']; ?></td>
                <td><?php echo $pecah['tinggi_produk']; ?></td>
                <td><?php echo $pecah['berat_produk']; ?></td>
                <td><?php echo $pecah['cc_produk']; ?></td>
                <td><?php echo $pecah['mesin_produk']; ?></td>
                <td><?php echo $pecah['topspeed_produk']; ?></td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
        </tbody>
    </table>

</div>

<style scoped lang="scss">
    .txt1 {
        float: right;
        margin-top: -109px; 
    }
    .table1 {
        max-width: 10px;
        width: 10px; 
        max-height: 10px;
        height: 10px;
        overflow: hidden;
    }
    .table2 {
        max-width: 100px;
        width: 100px;
    }
</style>