<?php
session_start();
include 'koneksi.php';

$username = $_POST['us'];
$password =$_POST['pass'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='".$username."' AND Password='".$password."'");

$cek = mysqli_num_rows($sql);
if ($cek > 0) {
    $data = mysqli_fetch_array($sql);

    $_SESSION['username'] = $data['Username'];
    $_SESSION['userid'] = $data['UserID'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('login berhasil');
    location.href='../index.php';
    </script>";

}else{
echo "<script>
alert('username atau password salah');
    location.href='../login.php';
    </script>";
}?>
