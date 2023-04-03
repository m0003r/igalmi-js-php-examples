<?php

// Строка запроса автоматически разбирается в массив $_GET
// его можно вывести целиком (в названии функции print_r буква r означает рекурсивный вывод массива*)
print_r($_GET);

// можем извлечь оттуда параметр по имени filename (как в примере)
$filename = $_GET['filename'];

// и попробуем прочитать этот файл и передать его целиком в браузер
// для этого есть специальная функция
echo "Сейчас будет содержимое файла $filename:\n";
readfile($filename);
echo "\nКонец содержимого\n";

// файл можно прочитать в массив строк:
$lines = file($filename);
echo "Содержимое файла построчно:\n";
print_r($lines);