<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Registrasi</title>
</head>

<body class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto mt-5">
                <div class="card">
                    <div class="card-title text-center mt-2">
                        <h3>Registrasi</h3>
                    </div>
                    <div class="card-body">
                        <form action="action_registrasi.php" method="POST">
                            <div class="mb-3">
                                <label for="">Nama:</label>
                                <input type="nama" class="form-control" name="nama" placeholder=" nama" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder=" email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder=" password" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="">Konfirmasi Password:</label>
                                <input type="password" class="form-control" name="kpassword" placeholder="konfirmasi password" autocomplete="off">
                            </div>
                            <input type="submit" name="submit" id="sumbit" value="Daftar" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>