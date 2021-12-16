<?php
$numbers = [1,2,3,4,5];

echo $numbers[3];
echo '<br>';

//echo '<pre>';
//printR
$count = count($numbers);
for ($i = 0; $i < $count; $i++) {
    echo "$i $numbers[$i] <br>";
}
echo '<hr>';
foreach ($numbers as $key => $value) {
    echo "$key: $value<br>";
}

$new_numbers = [];
 for ($i = 0; $i < 10; $i++) {
    $new_numbers[] = $i **2;
 }
 $new_numbers[9] = 99;
 $new_numbers[66] = 100;
 $count = count($new_numbers); //11
 echo "$count";
 echo '<pre>';
 print_r($new_numbers);
 
 echo '<hr>';
//ассоциативный массив
 $person = [
    'name' => 'Elena',
    'age' => '39',
    'city' => 'London',
    'language' => 'PHP'
];
echo '<pre>';
 print_r($person);
echo $person['name'];
$person['car'] = true;

echo '<pre>';
 print_r($person);

 unset($person['name']);
 echo '<pre>';
 print_r($person);

 echo '<hr>';

 $colors = ['red', 'green', 'blue'];
 $output ='';
 foreach ($colors as $color) {
     $output = $output . ' ' . $color;
 } 

 echo trim($output);
echo '<br>';
 $string_colors = implode(', ', $colors);
 echo "$string_colors<br>";

 $new_str = 'Предложение из четырех слов';
 $array = explode(' ', $new_str);

 print_r($array);
$numbers = [2, 4, 6, 1, 3];
 print_r($numbers);

 sort($numbers);//сортировка для не ассоциативных массивов
 print_r($numbers);

asort($person);//сортировка ассоциативного массива по значению
print_r($person);
ksort($person);//сортировка ассоциативного массива по ключу
print_r($person);

//сортировка в обратном порядке
rsort ($numbers);
print_r($numbers);
arsort($person);
print_r($person);
krsort($person);
print_r($person);

echo '<hr>';

$persons = [
    [
        'name' => 'Elena',
        'age' =>'28',
        'city' =>'London'
    ],
    [
        'name' => 'Jhon',
        'age' =>'20',
        'city' =>'Madrid'
    ],
    [
        'name' => 'Petr',
        'age' =>'35',
        'city' =>'Kazan'
    ]
];


function sortByAge ($a,$b) {
    if ($a['age'] > $b['age']) {
        return 1;        
    } else if ($a['age'] < $b['age']) {
        return -1;
    } else {
        return 0;
    }

}
usort($persons, 'sortByAge');
print_r($persons);

function sortByCity ($a,$b) {    
    return $a['city'] <=> $b['city'];        
}
//сортировка многомерных массивов
usort($persons, 'sortByCity');
print_r($persons);
echo '<hr>';

$numberOne= 10;
$numberTwo = 15;

if ($numberOne > $numberTwo) {
    echo 1;        
} else if ($numberOne < $numberTwo) {
    echo -1;
} else {
    echo 0;
}
//кораблик, сортировка
echo $numberOne <=> $numberTwo;
//lдостает одно поле
$names = array_column($persons,'name');
print_r($names);
//сортировка многомерного массива по полю
array_multisort($names, SORT_DESC, $persons);
print_r($persons);

$keys = array_keys($person);
print_r($keys);

$values = array_values($person);
print_r($values);

print_r($persons[0]);
print_r($persons[0]['age']);
