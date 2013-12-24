<?php
session_start();
header("Content-type: image/jpg");
function antirobot(){
 $karakter = array('a','A','b','B','c','C','d','D','e','E','f','F','g','G','h','H','i','I','j','J','k','K','l','L','m','M','n','N','o','O','p','P','q','Q','r','R','s','S','t','T','u','U','v','V','w','W','x','X','y','Y','z','Z','1','2','3','4','5','6','7','8','9','0');
 $max = (count($karakter)-1);
 srand(((double)microtime()*1000000));
 $kar1 = $karakter[rand(0,$max)];
 $kar2 = $karakter[rand(0,$max)];
 $kar3 = $karakter[rand(0,$max)];
 $kar4 = $karakter[rand(0,$max)];
 $kar5 = $karakter[rand(0, $max)];
 $rand_kar = $kar1.$kar2.$kar3.$kar4.$kar5;
 setcookie('random', $rand_kar, time()+6000);
 return $rand_kar;
}

//function RandomCode($max){
//$char = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y",
//              "Z","a","b","c","d","e","f","g","h","j","k","l","m","n","p","q","r","s","t","u","v","w","x",
//              "y","z","1","2","3","4","5","6","7","8","9");
// 
//$keys = array(5);
//while(count($keys) < $max) {
//    $x = mt_rand(0, count($char)-1);
//    if(!in_array($x, $keys)) {
//       $keys[] = $x;   
//    }       
//}
//foreach($keys as $key => $val){
// $random = $char[$val];  
//}
//return $random;
//}
//setting font yang akan digunakan
$font='VeraBd.ttf'; 
//gambar yang akan digunakan sebagai background
$images='captcha.png'; 

$im =  @imagecreatefrompng($images)or die("Cannot Initialize new GD image stream");
$text=  antirobot(6);
//Buat sessi untuk pengecekan pada halaman lain
$_SESSION['captcha']=$text;
//menentukan warna text // cc801e cc=204  80=128   1e=30
$text_color = imagecolorallocate($im, 221, 111, 29); 
imagettftext($im, 20, 0, 17, 42, $text_color, $font, $text);
imagejpeg($im);
imagedestroy($im);
?>


