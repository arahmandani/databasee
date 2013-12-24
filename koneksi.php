<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<?php
$tns = "  
(DESCRIPTION =
    (ADDRESS_LIST =
      (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
    )
    (CONNECT_DATA =
      (SERVICE_NAME = orcl)
    )
  )
       ";
$db_username = "testing";
$db_password = "auchu1218";
try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
}catch(PDOException $e){
    echo ($e->getMessage());
}
?>
//<?php
//$host = "localhost";
//$user = "root";
//$pass = "";
//$db = "testing";
//$konek = mysql_connect($host, $user, $pass) or die ('Koneksi Galat ');
//mysql_select_db($db);
//
//?>