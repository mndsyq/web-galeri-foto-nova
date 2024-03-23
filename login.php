<?php
session_start();
include 'config\koneksi.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/nova.css">
    <title>Masuk</title>
</head>

<body>

    <!--
    kontainer
    container - 6 kolom 
    container fluid 12 -> full
-->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="gambar/gb1.png" alt="" class="gb1">

            </div>
            <div class="col-lg-6">
                <h1 class="judul">Masuk Ke NApict</h1>
                <form action="config/aksi_login.php" method="POST">
                    <label for="" class="nmku">Nama atau Email</label>
                    <input type="text" id="masuk" name="us" class="userku kotak" required>

                    <label for="" class="nmku">Kata Sandi</label>
                    <input type="password" id="masuk" name="pass" class="userku kotak" required>

                    <input type="submit" name="submit" value="Masuk" class="btnmasuk">



                </form>
                 
                <label for="" class="akn">Belum Punya Akun?</label>
                <a href="register.php"><b>Daftar</b></a></label>



            </div>
        </div>
    </div>


</body>

</html>