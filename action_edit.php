<?php
require_once('connection.php');


if (isset($_POST['nomorbarang'])) $noBarang = $_POST['nomorbarang'];
else {
    echo 'Nomor Barang tidak ditemukan <a href= "index.php">Kembali</a>';
    exit();
}
$queryEdit = "SELECT * FROM barang WHERE no_barang = '{$noBarang}'";

$result = mysqli_query($mysqli, $queryEdit);

foreach ($result as $barang) {
    $gambar = $barang['gambar'];
    $noBarang = $barang['no_barang'];
    $namaBarang = $barang['nama_barang'];
    $stokBarang = $barang['stok'];
    $hargaBarang = $barang['harga'];
}


if (isset($_POST['nomorbarang'])) $noBarang = $_POST['nomorbarang'];

if (isset($_POST['namabarang'])) $namaBarang = $_POST['namabarang'];

if (isset($_POST['stokbarang'])) $stokBarang = $_POST['stokbarang'];

if (isset($_POST['hargabarang'])) $hargaBarang = $_POST['hargabarang'];

$files = $_FILES['gambar'];
$path = 'penyimpanan/';

if (!empty($files['name'])) {
    $filepath = $path . $files['name'];
    $upload = move_uploaded_file($files['tmp_name'], $filepath);

    if ($upload) {
        unlink($gambar);
    }
} else {
    $filepath = $gambar;
    $upload = false;
}

if ($upload != true && $filepath !=  '') {
    exit('gagal mengupload file');
}
$queryUpdate = "
    UPDATE barang SET 
        nama_barang ='{$namaBarang}',
        stok = '{$stokBarang}',
        harga = '{$hargaBarang}',
        gambar = '{$gambar}', 
    WHERE no_barang = '{$noBarang}'; 
";

$insert = mysqli_query($mysqli, $queryUpdate);

if ($insert == false) {
    echo 'error dalam update data <a href="index.php">Kembali</a>';
} else {
    header('Location: index.php');
}
