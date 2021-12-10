<?php
//Keep Hydrated!
function litres($t) {
  return $t > 0 ? floor($t / 2) : 0;
  }
  $time=11.8;
  //time = 3 ----> litres = 1
  echo 'time = ' . $time  . ' ----> litres = ' . litres($time);