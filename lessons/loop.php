<?php
$number =0;
while ($number<10) {
    echo $number . '<br>';
    $number++;
}

echo '<select>';
echo '<option selected disabled>-- Выберите значение --</option>';
for($i = 1; $i <10; $i++){
    echo "<option>$i</options>";
}
echo '</select>';
echo  'Фаренгейт   Цельсий  <br>';

$fareng = -50;
$cels = 0;
echo  'Фаренгейт   Цельсий  <br>';
while ($fareng <= 50) {
    $cels = round(($fareng-32)*5/9,2);
    echo $fareng . '  '. $cels .'<br>';
    
    $fareng++;
}
