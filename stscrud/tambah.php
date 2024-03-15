<?php


$title = 'Tambah Barang';

include 'layout/header.php';

if(isset($_POST['tambah'])){
  if (create_peminjaman($_POST) > 0){
    echo "<script>alert('Data peminjaman berhasil ditambahkan'); document.location.href = 'index.php'; </script>";
  }else{
    echo "<script>alert('Data peminjaman gagal ditambahkan'); document.location.href = 'index.php'; </script>";
  }
}

?>

<title><?= $title; ?></title>

<div class="container mt-3">
  <h3>Tambah Barang</h3>
</div>
<hr>


<form action="" method="post">
  <div class="container mb-2">
<div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="jumlah">jumlah</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" required>
  </div>
  <div class="form-group">
    <label for="nama_peminjam">Peminjam</label>
    <input type="text" class="form-control" id="peminjam" name="peminjam" aria-describedby="emailHelp" required>
  </div>
  <button type="submit" name="tambah" value="tambah" class="btn btn-primary" style="float: right">Tambah</button>
</div>

</form>

<?php

include 'layout/footer.php';

?>