<?php


include 'layout/header.php';

$title = 'Detail User';
$id_user = (int)$_GET['id_user'];

$user = select("SELECT * FROM user WHERE id_user = $id_user")[0];
?>
<title><?= $title; ?></title>

<div class="container mt-3">
    <h2>Data <?= $user['nama'];?></h2>
</div>

<hr>

<div class="container mt-5">
    <table class="table table-border table-striped mt-3" >
        <tr>
            <td>Nama</td>
            <td>: <?= $user['nama'];?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <?= $user['kelas'];?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>: <?= $user['no_tlp'];?></td>
        </tr>
    </table>
    <a href="user.php" class="btn btn-primary btn-sm" style="float: right;">Kembali</a>
</div>

<?php

include 'layout/footer.php';

?>