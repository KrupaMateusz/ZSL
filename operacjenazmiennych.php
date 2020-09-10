<?php
//wersja PHP 7.2.22
echo PHP_VERSION.'<hr>';

//echo phpinfo();
$potega=7**7;
echo $potega, '<br>';

//operatory bitowe
//and &, or|, not ~, xor ^, <<, >>
$x = 0b1010;
echo $x, '<br>'; //10

$x=$x << 1;
echo $x, '<br>';

$x=$x >> 2;
echo $x, '<br>';

//porownanie
$a=100;
$b=10;

//echo $a<=>$b
$result= $a<=>$b; //a>b=1, a=b=0, a<b=-1
echo $result;

 ?>
