<?php
require_once('connection.php');

$error = 0;
if (isset($_POST['nama'])) $nama = $_POST['nama'];
else $error = 1;

if (isset($_POST['email'])) $email = $_POST['email'];
else $error = 1;

if (isset($_POST['password'])) $password = $_POST['password'];
else $error = 1;

if (isset($_POST['kpassword'])) $kpassword = $_POST['kpassword'];
else $error = 1;

if ($error == 1) {
    echo 'terjadi kesalahan penginputan data';
}

if ($kpassword != $password) {
    echo 'password tidak sesuai silahkan isi kembali <a href="form_registrasi.php"</a>Kembali</a>';
} else {
    $password = hash('sha256', $password);
}

$queryInsert = "
    INSERT INTO admin
    (id_admin, nama,email,password)
     VALUES
      (0,'{$nama}','{$email}','{$password}');
";

$insert = mysqli_query($mysqli, $queryInsert);

if ($insert == false) {
    echo 'error dalam menambahkan data . <a href="form_tambah_data.php">Kembali</a>';
} else {
    header('Location :index.php');
}
