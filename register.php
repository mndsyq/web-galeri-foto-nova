
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
  <link rel="stylesheet" href="css/nova.css">
    <title>Daftar</title>
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
            <img src="gambar/gb2.png" alt=""class="gb1">
</div>
<div class="col-lg-6">
<div class="container-ku">
    <h1 class="judul">Daftar NApict</h1>
    <form action="config/aksi_register.php" method="post">
    
    <dic class="row row-cols-2">
        <div class="col">
           <label for="" class="usernm">Username</label> <br>
           <input type="text" id="masuk" name="us" class="userku1 kotak" required>
</div>
       <div class="col">
           <label for="" class="usernm">Password</label> <br>
           <input type="password"  id="masuk" name="pass" class="userku1 kotak" required>
</div>
<div class="col">
           <label for="" class="usernm">Email</label> <br>
           <input type="text" id="masuk" name="em" class="userku1 kotak" required>
</div>
<div class="col">
           <label for="" class="usernm">Nama Lengkap</label> <br>
           <input type="text"  id="masuk" name="nml" class="userku1 kotak"required>
</div>
</div>
<input type="submit" name="submit" value="submit" class="btnmasuk1 mt-4"
 id="button">

 </form>    
         <label center ="" class="akun">Sudah Punya Akun?
         <a href="login.php"><b>Masuk</b></a></label>
</div>
</div>
</div>


    
</body>
</html>