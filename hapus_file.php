<?php
require_once('connection.php');
if (isset($_GET['no_barang'])) $nomorBarang = $_GET['no_barang'];
else {
    echo ' Nomor barang tidak ditemukan ';
}
$query = "SELECT * FROM barang WHERE no_barang = '{$nomorBarang}'";
$result = mysqli_query($mysqli, $query);

foreach ($result as $barang) {
    $gambar = $barang['gambar'];
}

if (!is_null($gambar) && !empty($gambar)) {
    $remove = unlink($gambar);
    if ($remove) {
        $query = "
        UPDATE barang SET
         gambar = NULL
         WHERE no_barang = '{$nomorBarang}'";
        $insert = mysqli_query($mysqli, $query);
    }
}

header("Location :form_edit.php?no_barang={$nomorBarang}");
