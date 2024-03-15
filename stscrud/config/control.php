<?php

function select ($query)
{
    global $db;
     
    $result = mysqli_query($db, $query);
    $rows= [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function create_peminjaman($post)
{
    global $db;

    $nama =$post['nama'];
    $jumlah =$post['jumlah'];
    $peminjam =$post['peminjam'];

    $query = "INSERT INTO peminjaman VALUES(null, '$nama', '$jumlah', CURRENT_TIMESTAMP(), '$peminjam')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function update_peminjaman($post)
{
    global $db;
    $id_barang = $post['id_barang'];
    $nama_barang =$post['nama'];
    $jumlah =$post['jumlah'];
    $peminjam =$post['peminjam'];

    $query = "UPDATE peminjaman SET nama_barang = '$nama_barang', jumlah = '$jumlah', nama_peminjam = '$peminjam' WHERE id_barang = $id_barang";
    // var_dump($query);
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function delete_peminjaman($id_barang)
{
    global $db;

    $query ="DELETE FROM peminjaman WHERE id_barang = $id_barang";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function create_user($post)
{
    global $db;

    $nama =$post['nama'];
    $kelas =$post['kelas'];
    $no_tlp =$post['no'];

    $query = "INSERT INTO user VALUES(null, '$nama', '$kelas', '$no_tlp')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function delete_user($id_user)
{
    global $db;

    $query ="DELETE FROM user WHERE id_user = $id_user";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function edit_user($post)
{
    global $db;
    $id_user = $post['id_user'];
    $nama =$post['nama'];
    $kelas =$post['kelas'];
    $no_tlp =$post['no_tlp'];

    $query = "UPDATE user SET id_user = '$id_user', nama = '$nama', kelas = '$kelas', no_tlp = '$no_tlp' WHERE id_user = '$id_user'";
    // var_dump($query);
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

?>