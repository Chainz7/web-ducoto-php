<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h5 class="m-0 font-weight-bold text-primary">Data Pelanggan</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor=1; ?>
            <?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
            <?php while($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_pelanggan']; ?></td>
                <td><?php echo $pecah['email_pelanggan']; ?></td>
                <td><?php echo $pecah['telepon_pelanggan']; ?></td>
                <td>
                    <a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_pelanggan']; ?>" 
                       class="btn-danger btn">Hapus</a>
                </td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
          </body>
          <tfoot>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
</div>
