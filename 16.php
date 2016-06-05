<?php
/**
    16. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице,
    $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green').
    Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета,
    выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.
 */

$row = rand(1,100);
$cols = rand(1,50);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];
$table = "<table border = '1'>";
for ($i=0; $i<=$row; $i++){
    $table .= "<tr>";
    for($j=0; $j<=$cols; $j++){
        $bgcolor = $colors[array_rand($colors)];
        $number = rand();
        $table .= "<td bgcolor='{$bgcolor}'>{$number}</td>";
    }
    echo '</tr></table>';
}
echo $table;