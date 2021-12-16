<?php

$name = "Lena";
echo $name;
$age = 39;
echo "<br>";
echo $age;

$name2 = 'Ivan';
echo "<br>";
echo $name2;
$lastName = 'Лапик';
$last_name = 'Lapik';

/**
 * 
 * 
 */

 $fullName = $name . ' ' .  $lastName;

 echo "<br>";
 echo $fullName;

 $word = 'lower_case';
 $word = strtoupper($word);
 echo "<br>";
 echo $word;
 $upperCase = 'UPPER_CASE';
 $upperCase = strtolower($upperCase);
 echo "<br>";
 echo $upperCase;

 $password = '  querty ';
 echo '!' .  $password . '!';
 echo "<br>";
 echo trim($password) . '!';

 $number = 5 * 5;

 
 /**
 * 2 гамбургерга по 4.95
 * 1 коктейль 1.95
 * 1 кока-кола 0.95
 * ндс 7,5% (ко всему и чаевые)
 * чаевые 16% только к чеку
 * 
 */
echo "<br>";
$nameGam = 'Гамбургер';
$countGam = 2;
$priceGam = 4.95;

echo $nameGam . '  ' . $countGam . '  '. $priceGam*$countGam;
echo "<br>";
$nameKokt = 'Коктейль';
$countKokt = 1;
$priceKokt = 1.95;

echo $nameKokt . '  ' . $countKokt . '  '. $priceKokt*$countKokt;
echo "<br>";
$nameCoca = 'Кока-кола';
$countCoca = 1;
$priceCoca = 0.95;

echo $nameCoca . '  ' . $countCoca . '  '. $priceCoca*$countCoca;
echo "<br>";
$price = $priceGam + $praceKokt + $praceCoca;
echo $price;
$procCh  = 16;
$Ch = $price*$procCh/100;
echo 'чай' . ' '.$price;
$procNDC = 7.5;
$total = ($price+$Ch)/100*$procNDC+$price+$Ch;
echo 'Итого: ' . $total;


