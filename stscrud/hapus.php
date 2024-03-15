<?php



include 'config/app.php';

$id_barang = (int)$_GET['id_barang'];

if(delete_peminjaman($id_barang) > 0 ) {
    echo "<script>alert('Data berhasil dihapus'); document,location.href = 'index.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus'); document,location.href = 'index.php';</script>";
}

?>