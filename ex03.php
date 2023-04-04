<?php

// Если в строке запроса передан параметр num
if (isset($_GET['num'])) {
    // кладём его в переменную
    $num = $_GET['num'];
} else {
    // иначе недовольно ругаемся
    echo "Число не передано";
    // и заканчиваем выполнение скрипта
    exit;
}

// если это не похоже на число
if (!is_numeric($num)) {
    // иное сообщение об ошибке
    echo "'$num' не похоже на число";
    exit;
}

$res = $num * 100;
echo "$res\n";