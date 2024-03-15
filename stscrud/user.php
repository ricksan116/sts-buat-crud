<?php



include 'layout/header.php';

$title = 'Daftar User';

$data_user = select("SELECT * FROM user ORDER BY id_user");
?>

<title><?= $title; ?></title>

<div class="container mt-1">
    <h2>Data User</h2>
</div>
<div class="container">
    <a href="tambah-user.php" class="btn btn-primary">Tambah</a>
</div>
<hr>

<div class="container mt-2 text-center">
    <table class="table table-border table-striped" id="table">
        <thead>
            <tr class="text-center">
            <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">No Telepon</th>
                <th scope="col">aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_user as $user) : ?>
                <div class="container">
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $user['nama']; ?></td>
                        <td><?= $user['kelas']; ?></td>
                        <td><?= $user['no_tlp']; ?></td>
                        <td class="text-center">
                            <a href="detail.php?id_user=<?= $user['id_user']; ?>" class="btn btn-secondary btn-sm">Detail</a>
                            <a href="edit-user.php?id_user=<?= $user['id_user'];?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="hapus-user.php?id_user=<?= $user['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Apakah anda Yakin ?'); ">Delete</a>
                        </td>
                    </tr>
                </div>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php

include 'layout/footer.php';

?>