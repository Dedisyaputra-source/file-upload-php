<?php
require_once('connection.php');

require_once('action_session.php');

if ($sessionStatus == false) {
    header('Location :index.php');
}

if (isset($_GET['no_barang'])) $noBarang = $_GET['no_barang'];
else {
    echo 'Nomor barang tidak ditemukan';
    exit();
}

$queryDelete = "DELETE FROM barang WHERE no_barang = '{$noBarang}'";

$result = mysqli_query($mysqli, $queryDelete);

if (!$result) {
    exit('gagal menghapus data');
}

header('Location: index.php');
