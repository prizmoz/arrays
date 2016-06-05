<?php
/**
 * 5. Вывести таблицу умножения в виде 2 х 2 = 4 (более сложный вариант - в виде классической таблицы)
 */



//Выводим таблицу умножения в столбик (консоль)
/*
for($i=1; $i<=9; $i++) {
    for($j=1; $j<=9; $j++) {
        $res = $i * $j;
        //echo $i . '*' . $j . '=' . $res . '<br>';
        echo "{$i} x {$j} = {$res} \n";
    }
}
*/
?>

<html>
<head>
    <title>Таблица умножения</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .table {
            width: auto;
        }
    </style>
</head>
<body>
<?php
$table = "<table class='table table-bordered table-striped'>";
for($tr=1; $tr<=9; $tr++){  // цикл, который рисует 9 строк
    $table .=  "<tr>";
    for($td=1; $td<=9; $td++){ // цикл, который рисует 9 ячеек в каждой строке
        $table .= '<td>' .  $tr * $td . '</td>'; // выводим содержимое каждой ячейки
    }
    $table .= '</tr>';
}
echo $table . '</table>';
?>
</body>
</html>