<?php

// Это самый простой PHP-файл
// Это однострочный комментарий
/* Комментарий
может быть
многострочным */

// Точка с запятой в конце каждой конструкции обязательно

// Можно просто вывести что-нибудь в браузер. Для этой команды не нужны скобки
echo "Что-нибудь";

// Конец строки - это символ \n
echo "\n";

// NB: эти спец-символы работают только в строке в ДВОЙНЫХ кавычках
// В строке в одинарных кавычках они выводятся как есть:
echo 'Сейчас будет два символа: \n';

// Строки склеиваются с помощью точки (чтобы отличать это от сложения)
echo '...а теперь мы выведем символ конца строки' . "\n";

// Переменные всегда начинаются со знака доллара
$a = 1756;

// В строке в двойных кавычках они сами подставляются:
echo "Значение переменной a: $a\n";

// Можно написать цикл и вычислить числа Фибоначчи
$a = 1;
$b = 1;
for ($i = 0; $i < 20; $i++) {
    echo "$a, ";
    $c = $a + $b;
    $a = $b;
    $b = $c;
}
echo "$b\n";