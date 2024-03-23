<?php
include 'config\koneksi.php';
if(isset($_POST['submit']))
?>
<html>
    <head>
        <title>Data Image</title>
    </head>
    <body>
        <form action="" method="post">
        <label for="">Nama Album</label>
        <input type="text" name="alb"><br>
        <label for="">Deskripsi</label>
        <input type="text" name="des"><br>    
        <input type="file"><br>
        <input type="submit" name="submit" value="Kirim">
        </form>
    </body>
</html>