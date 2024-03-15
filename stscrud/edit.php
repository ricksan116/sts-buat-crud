<?php



$title = 'Edit Barang';

include 'layout/header.php';

$id_barang = (int)$_GET['id_barang'];

$barang = select("SELECT * FROM peminjaman WHERE id_barang = $id_barang")[0];

if(isset($_POST['ubah'])){
  if (update_peminjaman($_POST) > 0){
    echo "<script>alert('Data peminjaman berhasil diubah'); document.location.href = 'index.php'; </script>";
  }else{
    echo "<script>alert('Data peminjaman gagal diubah'); document.location.href = 'index.php'; </script>";
  }
}



?>


<title><?= $title; ?></title>

<div class="container mt-3">
  <h3>Edit Barang</h3>
</div>
<hr>


<form action="" method="post">
  <div class="container mb-2">
    <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
<div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $barang['nama_barang']; ?>" required>
  </div>
  <div class="form-group">
    <label for="jumlah">jumlah</label>
    <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $barang['jumlah']; ?>"  required>
  </div>
  <div class="form-group">
    <label for="nama_peminjam">Peminjam</label>
    <input type="text" class="form-control" id="peminjam" name="peminjam" value="<?= $barang['nama_peminjam']; ?>" required>
  </div>
  <button type="submit" name="ubah" value="ubah" class="btn btn-primary" style="float: right">Ubah</button>
</div>

</form>

<?php

include 'layout/footer.php';

?>