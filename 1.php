<?php
/**
 * 1.Дан массив с элементами 26, 17, 136, 12, 79, 15.
 * С помощью цикла foreach найдите сумму квадратов элементов этого массива.
 * Результат запишите переменную $result.
 */

$sum = '';
$arr = [26, 17, 136, 12, 79, 15];
foreach ($arr as $number) {
    $sum += $number**2;
}
echo $sum;