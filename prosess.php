<?php
require_once("koneksi.php");
$sayur = $_POST['sayuran'];
$barang = $_POST['ada'];
$beli = $_POST['beli'];
$harga = $_POST['harga'];
$stok = ($barang-$beli);
$namafoto = $_FILES['upload']['name'];   
$gambar = move_uploaded_file ($_FILES['upload']['tmp_name'], "./image/".$namafoto);
$cekuser = mysql_query("SELECT * FROM pilihan WHERE nama_sayuran ='$sayur';");
if(mysql_num_rows($cekuser) <> 0) {
echo "Sayur sudah ada! <br/>";
echo "<a href='masukandata.php'>Back</a>";
} else {
if(!$sayur||!$barang||!$beli||!$harga) {
echo "Masih ada data yang kosong!<br/>";
echo "<a href='masukandata.php'>Back</a>";
} else {
$dir = "image/".$namafoto;  
$simpan = mysql_query("INSERT INTO pilihan(nama_sayuran,jumlah_item,jumlah_pembeli,tersedia,harga,gambar) VALUES('$sayur','$barang','$beli','$stok','$harga','$dir');");

        }               
                   
if($simpan) {

echo "<a href='masukandata.php'>Masukan lagi</a>";
} else {
echo "galat";
echo "<a href='masukandata.php'>back</a>";
}
}


?>
