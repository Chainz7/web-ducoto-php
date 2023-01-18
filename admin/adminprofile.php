<div>
    <h2>Profile</h2>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" value="<?php echo $_SESSION["admin"]['nama_lengkap']?>">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="Username" value="<?php echo $_SESSION["admin"]['username']?>">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="Password" value="<?php echo $_SESSION["admin"]['password']?>">
        </div>
        <button class="btn btn-primary" name="ubah">Ubah</button> </p>
    </form>
    <?php
    if (isset($_POST['ubah']))
    {
        $koneksi->query("UPDATE admin SET nama_lengkap='$_POST[Nama]',username='$_POST[Username]',
                password='$_POST[Password]'");
        
        echo "<script>alert('Profile Telah Diubah, silahkan relogin untuk melihat perubahan profile');</script>";
        echo "<script>location='index.php?halaman=admin';</script>";
    }
    ?>
</div>