<div>
    <h2>Ubah Admin</h2>
    <?php
    $ambil=$koneksi->query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
    $pecah= $ambil->fetch_assoc();
    ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" value="<?php echo $pecah['nama_lengkap']; ?>">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="Username" value="<?php echo $pecah['username']; ?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="Password" value="<?php echo $pecah['password']; ?>">
        </div>
        <button class="btn btn-primary" name="ubah">Ubah</button> </p>
    </form>
    <?php
    if (isset($_POST['ubah']))
    {
        $koneksi->query("UPDATE admin SET nama_lengkap='$_POST[Nama]',username='$_POST[Username]',
                password='$_POST[Password]' WHERE id_admin='$_GET[id]'");
        
        echo "<script>alert('Data Admin Telah Diubah');</script>";
        echo "<script>location='index.php?halaman=admin';</script>";
    }
    ?>
</div>