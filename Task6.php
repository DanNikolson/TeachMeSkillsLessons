<?php
//Вроде работает
$text = readline("Введите строку:");

$text = str_replace(" ","", $text);// Удаление пробелов
$text = mb_strtolower($text); // Перевод букв в нижний регистр
$array = preg_split('//u',$text,-1,PREG_SPLIT_NO_EMPTY);//Разбиение строки по регулярному выражению
// print_r($array);
$arrayrev = array_reverse($array);//Строка наоборот
// print_r($arrayrev);
echo ($array == $arrayrev) ? 'Строка - палиндром' : 'Строка не палиндром';
?>