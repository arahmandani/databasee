<!DOCTYPE html>
    <?php
session_start();
if(!isset($_SESSION['username'])) {
header('location:login.php'); }
else { $username = $_SESSION['username']; }
require_once("koneksi.php");

?>
<html>
<head>
<title>PROBABILITAS</title>
<link rel="stylesheet" type="text/css" href="css/style2.css" />
<script type="text/javascript" src="jquery-1.10.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
 $('#menu li').hover(
 function () {
 //show submenu
 $(' ul', this).stop().slideDown(500);

},
 function () {
 //hide submenu
 $(' ul', this).stop().slideUp(500);
 }
 );

}),
function awas(){
    alert("Selamat Datang :)");
};
</script>

</head>
<div id="menu">
   <?php
echo "<h2>Selamat Datang, $username </h2>";

?>  
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="#">Menu</a>
<ul>
 <li><a href="bayer.php">Perhitungan Bayer</a></li>
 <li><a href="index_1.php">Cari kata dasar</a></li>
 <li><a href="hitung.php">Rekomendasi Paket</a></li>

 </ul>

</li>
<li><a href="#">Kontak Kami</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<center>
    <form method="POST" action="prosess.php"  enctype="multipart/form-data">
<h1>Masukan data</h1>
<table>
<tr>
<td>Inputkan data nama sayuran : <br></td>
<td><input type="text" name="sayuran" /></td>
<tr>
<tr><br>
<td>Inputkan data jumlah barang (pertama) beli :<br></td>
<td><input type="text" name="ada" /></td>
</tr>
<tr><br>
<td>Inputkan data yang di beli :<br></td>
<td><input type="text" name="beli" /></td>
</tr>
<tr><br>
<td>Inputkan harga barang:</td>
<td><input type="text" name="harga" /></td>
</tr>
<tr><td>Gambar</td>      <td> : <input type="file" name="upload" size=40> 
        <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 200 px</td></tr>
          
<tr>
<td>
<label> <br> <br>
<input type="submit" name="Submit" value="Masukan" id="cmenk1" >
</label>
<label>
<input type="reset" name="reset" value="Batal" id="cmenk1">
</label>
</td>
</tr>
</table>
</form>
    </center>
<center>
</div>
<?php
echo date ("(D, d-m-Y  H:i:s)") ;

?>
<div id="cmenk">
    Copyright &copy; 2013 by Gariz Maya
</div>
</center>

</body>
</html>