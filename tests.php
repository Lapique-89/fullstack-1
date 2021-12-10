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
    for ($i=0; $i<$n; $i++) {
      $strMain .= $str;
    }
  } 
  return $strMain;
}
echo  repeatStr(6, "7") . '<br>';

//Return the Nth Even Number - тестирование не прошла, не понимаю, в чем ошибка 'Failed asserting that null matches expected 2.'
function nthEven($n) {
  if ($n == 0) {
    echo 'The input will not be 0';
  } else if ($n == 2){
    echo $n . ' --> ' . 1;
  } else {
    echo $n . ' --> ' . (($n - 1) * 2);
  }    
}
$n = 4;
nthEven($n);
echo '<br>';

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

