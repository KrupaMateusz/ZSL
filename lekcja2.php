<?php
//identyczność
$x=1;
$y=1.0;

if ($x==$y) {
  echo 'zmienne są rowne';
}else{
  echo 'zmienne nie są rowne';
}
echo '<br>';
if ($x===$y) {
  echo 'zmienne są identyczne';
}else{
  echo 'zmienne nie są identyczne';
}
echo '<hr>';
echo gettype($x); //integer
echo '<hr>';
echo gettype($y); //double
echo '<hr>';


/*
postinkrementacja jest po zmiennej $x++
preinkrementacja jest przed zmienną ++$x
postdekrementacja jest po zmiennej $x--
predekrementacja jest przed zmienną --$x
*/
$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
$y=$x++;
$y=--$y;
echo $y; //2

##################################
echo '<hr>';

$x=2;
echo $x++; //2
echo ++$x; //4
echo $x; //4
$y=$x++;
echo $y; //4
$y=++$x;
echo $y; //6
echo ++$x; //7

echo '<hr>';



 ?>
