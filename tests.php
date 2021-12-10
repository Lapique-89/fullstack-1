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
echo  repeatStr(6, "7"). '<br>';;