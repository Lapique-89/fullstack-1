<?php
//Keep Hydrated!
function litres($t) {
  return $t > 0 ? floor($t / 2) : 0;
  }

  $time=11.8;  
  echo 'time = ' . $time  . ' ----> litres = ' . litres($time) . '<br>';

  
 // String repeat
 function repeatStr($n, $str)
{
  $strMain = '';
  if ($n>0){
    for ($i = 0; $i < $n; $i++) {
      $strMain .= $str;
    }
  } 
  return $strMain;
}
echo  repeatStr(6, "7") . '<br>';

//Return the Nth Even Number - исправила просто на вывод
function nthEven($n) {
  return (($n - 1) * 2);    
}
$n = 4;
echo nthEven($n) . '<br>';

//Complete the solution so that it reverses the string passed into it.
function solution($str) {
  return strrev((string) $str);
}
$str = 1234;
echo $str . ' => ' . solution($str) . '<br>';

//Thinkful - String Drills: Quotable
function quotable($name, $quote) {
  $str = $name . ' said: "' . $quote. '"' ;
  return (string) $str;
}
$name = 'Grae';
$quote = 'Practice makes perfect'; 
echo quotable($name, $quote) . '<br>';

//Return the number (count) of vowels in the given string.
function getCount(string $str):int {
  $vowelsCount = 0;
  $vowels = ['a', 'e', 'i', 'o', 'u'];
  foreach ($vowels as $vowel) {
    $vowelsCount += substr_count($str, $vowel);
  }  
  return $vowelsCount;
}
$string = 'Return the number (count) of vowels in the given string. yy? ';
echo getCount($string) . '<br>';

//Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.
function persistence(int $num): int {
  function multiplication($a, $b)//тут тоже сдаюсь, на сайте ругается на функцию внутри функции, хотя тут работает
  {
    (int) $a *= (int) $b; 
    return $a;
  }
  $count = 0;

    while (strlen((string) $num) > 1) {      
        $num = str_split( (string) $num);       
        $num = array_reduce($num, "multiplication",1);


        $count++;
    }
    return $count;
}

$number = 27;
echo persistence($number) . '<br>';


