<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "testing";
$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Galat ');
mysql_select_db($db);
?>