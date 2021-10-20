<?php
$mysqli = new mysqli('localhost', 'root', '', 'gudang');

if ($mysqli->connect_errno) {
    echo 'gagal menyambungkan database:' . $mysqli->connect_error;
    exit();
}
