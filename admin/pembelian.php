<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Data Pembelian</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan
                .id_pelanggan"); ?>
            <?php while($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_pelanggan']; ?></td>
                <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                <td><?php echo $pecah['total_pembelian']; ?></td>
                <td>
                    <a href="index.php?halaman=hapuspembelian&id=<?php echo $pecah['id_pembelian']; ?>" 
                    class="btn-danger btn">Hapus</a>
                    <a href="index.php?halaman=detailpembelian&id=<?php echo $pecah['id_pembelian']; ?>" 
                    class="btn-info btn" style="margin-right:-80px;">Detail</a>
                </td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
          </body>
          <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
</div>
