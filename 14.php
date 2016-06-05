<?php
/**
    14. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
    найти максимальное и минимальное значение и поменять их местами.
 */

$arr = [];
for($i=0; $i<=10; $i++){
    $arr[] = rand();
}
print_r($arr); // выводим изначальный массив
$maxIndex = array_search(max($arr),$arr); // узнаем индекс максимального числа в массиве
$minIndex = array_search(min($arr),$arr); // узнаем индекс минимального числа
list($arr[$maxIndex], $arr[$minIndex]) = array($arr[$minIndex], $arr[$maxIndex]);
echo '<br><br>';
print_r($arr); // выводим массив после перестановки
