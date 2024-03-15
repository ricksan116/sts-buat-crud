<?php


$title = 'Edit User';

include 'layout/header.php';

if (isset($_POST['Edit'])) {
    if (edit_user($_POST) > 0) {
        echo "<script>alert('Data User berhasil di Ubah'); document.location.href = 'user.php'; </script>";
    } else {
        echo "<script>alert('Data User gagal di Ubah'); document.location.href = 'user.php'; </script>";
    }
}

$id_user =(int)$_GET['id_user'];

$user = select("SELECT * FROM user WHERE id_user = $id_user")[0];

?>

<title><?= $title; ?></title>

<div class="container mt-3">
    <h3>Edit User</h3>
</div>
<hr>

<input type="hidden" name="id_barang" value="<?= $user['id_user']; ?>">
<form action="" method="post">
    <div class="container mb-2">
        <div class="form-group">
            <label for="nama_barang">Nama User</label>
            <input type="text" class="form-control" id="nama" name="nama" required value="<?= $user['nama'];?>">
        </div>
        <div class="row">
            <div class="mb-3 col-6">
            <label for="nama_barang">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required value="<?= $user['kelas'];?>">
            </div>
        </div>
        <label for="nama_barang">No Telepon</label>
            <input type="number" class="form-control" id="no" name="no" required value="<?= $user['no_tlp'];?>"><br>
            <button type="submit" name="Edit" value="Edit" class="btn btn-primary" style="float: right">Edit</button>
</form>

<?php

include 'layout/footer.php';

?>