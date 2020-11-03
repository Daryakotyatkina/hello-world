<?php
//array-Создает массив//
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);
echo '<br>';

//array_flip-Меняет местами ключи с их значениями в массиве.Функция array_flip() возвращает массив (array) наоборот, то есть ключи массива array становятся значениями, а значения массива array становятся ключами.//
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped);
echo '<br>';

//soft-Сортирует массив.Функция сортирует массив. После завершения работы функции элементы массива будут расположены в порядке возрастания.//
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
echo '<br>';

//end-Устанавливает внутренний указатель массива на его последний элемент//
$fruits = array('apple', 'banana', 'cranberry');
echo end($fruits); // cranberry
echo '<br>';

//array_map — Применяет callback-функцию ко всем элементам указанных массивов//
function cube($n)
{
    return ($n * $n * $n);
}
$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
echo '<br>';

