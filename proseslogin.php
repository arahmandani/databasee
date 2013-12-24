<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$kodee =$_POST['kode'];
$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);

if($jumlah == 0) {
echo "Username Belum Terdaftar!<br/>";
echo "<a href='login.php'> Kembali</a>";
} else {
if($pass <> $hasil['password']) {
echo "Password Salah!<br/>";
echo "<a href='login.php'>Back</a>";
}else{ 
//    if(!empty($kodee)){
//		if($kodee==$_SESSION['captcha'])
                
$_SESSION['username'] = $hasil['username'];
header('location:index.php');
}
}
?>

