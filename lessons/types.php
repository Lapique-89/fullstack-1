<?php
$name = 'Elena';

echo $name . ' ' . gettype($name) . ' ' . '<br>';
$age = 39;
echo $age . ' ' . gettype($age) . ' ' . '<br>';
$money = 999.99;
echo $money . ' ' . gettype($money) . ' ' . '<br>';
$isRain = true;
echo $isRain . ' ' . gettype($isRain) . ' ' . '<br>';

echo $notExist . ' ' . gettype($notExist) . ' ' . '<br>';

echo '<hr>';
if ($name){
    echo '$name true <br>';    
}
else {
    echo '$name false <br>';  
}

$emptyString = '';
if ($emptyString){
    echo '$emptyString true <br>';    
}
else {
    echo '$emptyString false <br>';  
}

$number = 99;
if ($number){
    echo '$number true <br>';    
}
else {
    echo '$number false <br>';  
}

$zero = 0;
if ($zero){
    echo '$zero true <br>';    
}
else {
    echo '$zero false <br>';  
}
$zeroString = '0';
if ($zeroString){
    echo '$zeroString true <br>';    
}
else {
    echo '$zeroString false <br>';  
}
$null = NULL;
if ($null){
    echo '$null true <br>';    
}
else {
    echo '$null false <br>';  
}
if (0===""){
    echo '0 === "" true <br>';    
}
else {
    echo '0 === $false false <button>!!!</button> <br>';  
}

echo 'My name\'s Elena <br>';
echo "My name's Elena";
$message = "значение переменной name = $name";
echo $message;

echo htmlspecialchars('<img src="images/img.png">');//для вывода html в строку как текст


//and &&
//or ||
//++
$number =10;
$number++;//инкремент, 11
++$number;

$n=10;
$new_number = $n++;//11
$n=10;
$new_number = ++$n;//10
echo $new_number;

$n=-1;
if($n++) {
    echo 'true';
}
else {
    echo 'false';
}
if(++$n) {
    echo 'true';
}
else {
    echo 'false';
}

echo '<hr>';
$n = 10;
$n += 5;//$n+5

echo $n;

$name = 'Elena';
$name .= ' Lapik';
echo $name;