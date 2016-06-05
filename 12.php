<!--
    12. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
    пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
    2, 3, т.е. 6.
    По желанию можете сделать проверку на корректность введения данных пользователем.
-->
<?php
if(isset($_GET['numbers'])){
    if(is_numeric($_GET['numbers'])){
        $arr = str_split($_GET['numbers']);
        foreach($arr as $num){
            $sum += $num;
        }
    }else{
        $error = 'Допускаются только числовые значения';
    }

}
?>
<html>
<head>
    <title>Сумма цифр числа</title>
</head>
<body>
<div align="center">
    <form action="12.php">
        <input type="text" name="numbers" placeholder="Введите число">
        <input type="submit" value="Результат">
    </form>
</div>
<div align="center">
    <?php
    if(isset($error)) {
        echo $error;
    }else{
        echo "Сумма цифр введенного числа: {$sum}";
    }
    ?>
</div>
</body>
</html>