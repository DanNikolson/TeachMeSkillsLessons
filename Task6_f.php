<?php
//Напишите функции biggestSymbol(str) и summOfSymbols(str). 
//Первая функция должна определить самый большой символ (по ASCII код) в строке , а 
//вторая функция должна определить сумму всех символов (по ASCII код) в строке, возвращайте результат через return (с.м. функцию ord).

function biggestSymbol(){
    $str = "vasya";
    $array = [];
    for ($pos = 0; $pos < strlen($str); $pos++) {
        $array[] = ord($str[$pos]);
    }
    return max($array);
}
echo biggestSymbol();

function summOfSymbols()
{
    $str = "vasya";
    $sum = [];
    for ($pos = 0; $pos < strlen($str); $pos++) {
        $sum[] = ord($str[$pos]);
    }
    return array_sum($sum);
}
echo summOfSymbols();
