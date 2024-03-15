<?php



$title = 'Tambah User';

include 'layout/header.php';

if (isset($_POST['tambah'])) {
    if (create_user($_POST) > 0) {
        echo "<script>alert('Data User berhasil ditambahkan'); document.location.href = 'user.php'; </script>";
    } else {
        echo "<script>alert('Data User gagal ditambahkan'); document.location.href = 'user.php'; </script>";
    }
}

?>

<title><?= $title; ?></title>

<div class="container mt-3">
    <h3>Tambah User</h3>
</div>
<hr>

<form action="" method="post">
    <div class="container mb-2">
        <div class="form-group">
            <label for="nama_barang">Nama User</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="row">
            <div class="mb-3 col-6">
            <label for="nama_barang">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
            </div>
        </div>
        <label for="nama_barang">No Telepon</label>
            <input type="number" class="form-control" id="no" name="no" required><br>
            <button type="submit" name="tambah" value="tambah" class="btn btn-primary" style="float: right">Tambah</button>
</form>

<?php

include 'layout/footer.php';

?>