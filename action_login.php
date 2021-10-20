<?php
require_once('connection.php');

$error = 0;
if (isset($_POST['email'])) $email = $_POST['email'];
else $error = 1;

if (isset($_POST['password'])) $password = $_POST['password'];
else $error = 1;

if (isset($_POST['kpassword'])) $kpassword = $_POST['kpassword'];
else $error = 1;

if ($error == 1) {
    echo 'terjadi kesalahan penginputan data';
    exit();
}

if ($kpassword != $password) {
    echo 'password tidak sesuai silahkan isi kembali <a href="form_registrasi.php"</a>Kembali</a>';
} else {
    $password = hash('sha256', $password);
}

$queryselect = "SELECT * FROM admin WHERE email = '{$email}'";

$result = mysqli_query($mysqli, $queryselect);

$data = mysqli_fetch_assoc($result);

if (is_null($data)) {
    echo 'email tidak terdaftar';
} else if ($data['password'] != $password) {
    echo 'password anda salah';
} else {
    session_start();

    $_SESSION['status'] = true;
    $_SESSION['name'] = $data['nama'];
    $_SESSION['email'] = $data['email'];

    header('Location: index.php');
}
