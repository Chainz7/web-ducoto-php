<div>
    <h2>Tambah Admin</h2>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="Nama" required>
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="Username" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="Password" required>
        </div>
        <button class="btn btn-primary" name="save">Simpan</button> </p>
    </form>
    <?php
    if (isset($_POST['save']))
    {
        $koneksi->query("INSERT INTO admin
            (nama_lengkap,username,password)

            VALUES('$_POST[Nama]','$_POST[Username]','$_POST[Password]')");

        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='l;url=index.php?halaman=admin'>";
    }
    ?>
</div>