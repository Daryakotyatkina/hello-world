<?php
//1

$text = ' sun sunset sea air water';

$replace = preg_replace('/^ +| +$|( ) +/m', ' ', $text);

echo $replace;
echo '<br>';


//2

$text = 'приведенный пример пытается влиять только на пару свойств';
$word = explode(" ", $text);
for ($i = 0; $i < count($word); $i++) {
    if (mb_strlen($word[$i]) >= 3 and mb_strlen($word[$i]) <= 5) {
        echo $word[$i]." ";
    }
}
echo '<br>';

//3

$text = "sun sunset sea air water";
$result = str_replace('', '', $text);
print $result. '\r\n';
echo '<br>';
$palindrom = strrev($result);
if ($result == $palindrom) {
    echo "Строка является палидромной.";
} else {
    echo "Строка не является палидромной.";
}
echo '<br>';

//4

$text = 'К каждой веб-странице можно присоединить несколько таблиц стилей';
$arr = explode(" ", $text);
$max = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if (strlen($arr[$i]) >= strlen($max)) {
        $max = $arr[$i];
    }
}
echo $max;
echo '<br>';

//5

$text = 'sun sunset sea air water';
$big = 0;
$small = 0;
for ($i = 0; $i < strlen ($text); $i++)
    if ($text[$i] >= 'a' and $text[$i] <= 'z') {
        $little++;
    } elseif
    ($text[$i] >= 'A'and $text[$i] <= 'Z') {
        $big++;
    }
echo 'строчные $small, прописные $big';
echo '<br>';
