<div class="font">
<link rel="stylesheet" type="text/css" href="DataTables/datatables.css"/>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h5 class="m-0 font-weight-bold text-primary">Data Admin</h5>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th class="table2">No</th>
                    <th class="table2">Nama</th>
                    <th class="table2">Username</th>
                    <th class="table2">Password</th>
                    <th class="table2" style="margin-right:100px;">Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php $nomor=1; ?>
               <?php $ambil=$koneksi->query("SELECT * FROM admin"); ?>
               <?php while($pecah = $ambil->fetch_assoc()){ ?>
                <tr>
                    <td class="table1"><?php echo $nomor; ?></td>
                    <td class="table1"><?php echo $pecah['nama_lengkap']; ?></td>
                    <td class="table1"><?php echo $pecah['username']; ?></td>
                    <td class="table1"><?php echo $pecah['password']; ?></td>
                    <td>
                        <a href="index.php?halaman=hapusadmin&id=<?php echo $pecah['id_admin']; ?>" 
                            class="btn-danger btn">Hapus</a>
                        <a href="index.php?halaman=ubahadmin&id=<?php echo $pecah['id_admin']; ?>"
                            class="btn btn-warning">Edit</a>
                        
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php } ?>
              </body>
            </table>
          </div>
        </div>
    </div>
    <a href="index.php?halaman=tambahadmin" class="btn btn-primary">Tambah Data</a>
    </p>
    
    <script type="text/javascript" src="DataTables/datatables.js"></script>
</div>

<style scoped lang="scss">
    .table1 {
        max-width: 10px;
        width: 10px; 
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