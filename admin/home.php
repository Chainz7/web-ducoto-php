<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-primary">Dashboard</h5>
  </div>
  <div class="card-body">
    <div class="row">
    <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Produk</div>
                      
                  <?php $ambil=$koneksi->query("SELECT count(*) AS total FROM produk"); ?>
                  <?php $pecah = $ambil->fetch_assoc(); ?>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pecah['total']; ?></div>
                  
                </div>
                <div class="col-auto">
                <img src="../admin/icon/product.png" style="width:45px;height:45px;">
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Uang (Earned)</div>
                      
                  <?php $ambil=$koneksi->query("SELECT * FROM pembelian WHERE total_pembelian=total_pembelian"); ?>
                  <?php $pecah = $ambil->fetch_assoc(); ?>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"
                  style="font-size:15px;">Rp,<?php echo $pecah['total_pembelian']; ?>,-</div>

                </div>
                <div class="col-auto">
                <img src="../admin/icon/transaction.png" style="width:45px;height:45px;">
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Transaksi</div>
                  <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                          
                  <?php $ambil=$koneksi->query("SELECT count(*) AS total FROM pembelian"); ?>
                  <?php $pecah = $ambil->fetch_assoc(); ?>
                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pecah['total']; ?></div>

                  </div>
                  </div>
                  </div>
                <div class="col-auto">
                <img src="../admin/icon/transaction.png" style="width:45px;height:45px;">
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total User</div>
                      
                    <?php $ambil=$koneksi->query("SELECT count(*) AS total FROM pelanggan"); ?>
                    <?php $pecah = $ambil->fetch_assoc(); ?>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $pecah['total']; ?></div>
                  </div>
                  <div class="col-auto">
                  <img src="../admin/icon/user.png" style="width:45px;height:45px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
