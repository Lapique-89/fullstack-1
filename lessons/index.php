

<?php

//require 'funcs.php';//подключить 
//require_once 'funcs.php';//подключить один раз
//include 'funcs11111.php';
//include_once 'src/funcs.php';//'src/funcs.php' - если в папке или полный путь
echo "<select>";
for ($i = 0; $i < 5; $i++) {
    include 'src/option.php.php';
}
echo "<select>";
function plusOne ($number) {
    $number = $number + 1;
}

$a = 10;
echo "$a<br>";
plusOne($a);
echo "$a<br>";

var_dump($number);
//не надо так делать!!!!!!
function wrongPlusOne () {
   global $a;//берем глобальную, извне
   $a = $a+1;

}

//dump($GLOBALS);









//echo date('d.m.Y H:i:s');
//echo 2 ** 3;//возведение в степень


