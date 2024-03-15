<?php



$title = 'Daftar Barang';

include 'layout/header.php';

$data_barang = select("SELECT * FROM peminjaman ORDER BY id_barang DESC ")

?>
<title><?= $title; ?></title>
<div class="container mt-3">
  <h2>CRUD</h2>
</div>
<div class="container">
  <a href="tambah.php" class="btn btn-primary">Tambah</a>
</div>
<hr>

<div class="container mt-2">
  <table class="table table-border table-striped" id="table">
    <thead>
      <tr class="text-center">
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Peminjam</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($data_barang as $barang) : ?>
        <tr class="text-center">
          <td><?= $no++; ?></td>
          <td><?= $barang['nama_barang']; ?></td>
          <td><?= $barang['jumlah']; ?></td>
          <td><?= $barang['tanggal']; ?></td>
          <td><?= $barang['nama_peminjam']; ?></td>
          <td><a href="edit.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-primary">Edit</a>
            <a href="hapus.php?id_barang=<?= $barang['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Apa anda yakin ?');">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?php

include 'layout/footer.php';

?>