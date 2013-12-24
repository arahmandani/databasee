<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
function antirobot(){
 $karakter = array('a','A','b','B','c','C','d','D','e','E','f','F','g','G','h','H','i','I','j','J','k','K','l','L','m','M','n','N','o','O','p','P','q','Q','r','R','s','S','t','T','u','U','v','V','w','W','x','X','y','Y','z','Z','1','2','3','4','5','6','7','8','9','0');
 $max = (count($karakter)-1);
 srand(((double)microtime()*1000000));
 $kar1 = $karakter[rand(0,$max)];
 $kar2 = $karakter[rand(0,$max)];
 $kar3 = $karakter[rand(0,$max)];
 $kar4 = $karakter[rand(0,$max)];
 $rand_kar = $kar1.$kar2.$kar3.$kar4;
 setcookie('random', $rand_kar, time()+7200);
 return $rand_kar;
}
echo antirobot();
?>