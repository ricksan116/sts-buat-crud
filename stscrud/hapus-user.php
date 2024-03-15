<?php



include 'config/app.php';

$id_user = (int)$_GET['id_user'];

if(delete_user($id_user) > 0 ) {
    echo "<script>alert('User berhasil dihapus'); document,location.href = 'user.php';</script>";
}else{
    echo "<script>alert('User gagal dihapus'); document,location.href = 'user.php';</script>";
}

?>