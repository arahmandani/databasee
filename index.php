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
        <meta charset="UTF-8">
        <title>SISTEM DATABASE</title>
    </head>
    <body>
        <?php
        echo "Dalam perbaikan";
        ?>
    </body>
</html>
