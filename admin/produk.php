<div class="font">
<link rel="stylesheet" type="text/css" href="DataTables/datatables.css"/>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-primary">Data Produk <a style="float:right;" href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a></h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th class="table2">No</th>
                    <th class="table2">Foto</th>
                    <th class="table2">Nama</th>
                    <th class="table2">Harga</th>
                    <th class="table2">Power/Torq</th>
                    <th class="table2">Silinder</th>
                    <th class="table2">kategori</th>
                    <th class="table2">CC</th>
                    <th class="table2">Berat</th>
                    <th>TopSpeed</th>
                    <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php $nomor=1; ?>
               <?php $ambil=$koneksi->query("SELECT * FROM produk"); ?>
               <?php while($pecah = $ambil->fetch_assoc()){ ?>
                <tr>
                    <td class="table1"><?php echo $nomor; ?></td>
                    <td>
                        <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
                    </td>
                    <td class="table1"><?php echo $pecah['nama_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['harga_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['power_produk']; ?> / <?php echo $pecah['torque_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['silinder_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['kategori_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['cc_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['berat_produk']; ?></td>
                    <td class="table1"><?php echo $pecah['topspeed_produk']; ?></td>
                    <td>
                        <a style="width:48px;height:30px;" 
                            href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" 
                            class="btn-danger btn">
                        <img style="width:30px;height:30px; margin-left: -4px;margin-top:-10px;" 
                            src="../admin/icon/delete6.png"></a> </br>
                        <a style="width:48px;height:30px; margin-left:52px;margin-top:-50px;"
                            href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>"
                            class="btn btn-warning">
                        <img style="opacity:70%;width:22px;height:22px; margin-left: 1px;margin-top:-12px;" 
                            src="../admin/icon/edit5.png"></a> </br>
                        <a style="width:100px;height:30px;margin-top:-20px;"
                            href="index.php?halaman=detailproduk&id=<?php echo $pecah['id_produk']; ?>"
                            class="btn btn-info"><div style="margin-top:-4px;">Detail</div></a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
              </body>
              <tfoot>
                <tr>
                    <th>No</th>
                    <th class="table2">Foto</th>
                    <th class="table2">Nama</th>
                    <th class="table2">Harga</th>
                    <th class="table2">Power/Torq</th>
                    <th class="table2">Silinder</th>
                    <th class="table2">Kategori</th>
                    <th class="table2">CC</th>
                    <th class="table2">Berat</th>
                    <th>TopSpeed</th>
                    <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
    </div>
    <a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>
    </p>
    
    <script type="text/javascript" src="DataTables/datatables.js"></script>
</div>

<style scoped lang="scss">
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
    .font {
        font-size: 13px;
    }
</style>