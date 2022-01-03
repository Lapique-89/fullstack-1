<?php
function sayHello() {
    echo 'Hello<br>';
}
function plusOne ($a){
    echo ++$a . '<br>';
}
function muliply (int $a, int $b) {
    echo $a * $b . '<br>';
};

function sumNumbers ($a, $b, $c = 0) {
    echo $a + $b + $c . '<br>';
};

function returnPlusOne($a){
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
}
sayHello();
plusOne(56);
muliply(3,15);
sumNumbers(1,2);
$number = 9;
returnPlusOne($number);
$result = returnPlusOne($number);
echo "Старое число: {$result['newValue']}, новое число: {$result['newValue']}<br>";
//вернет null без return в функции
$res = sumNumbers(1, 2);
echo '<pre>';
var_dump($res);

$numbers = [1, 5, 3, 7, 2, 4];

function maxNumber (array $numbers) {
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

function positive_sum (array $numbers) {
    $res = 0;
    foreach ($numbers as $number) {
        if ($number >0) {
             $res += $number;
        }
    }    return $res;
}
echo maxNumber($numbers). '<br>';

echo max($numbers) . '<br>';