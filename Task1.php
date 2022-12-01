<?php
//1. Дан массив из n чисел, вывести индекс каждого элемента, у которого значение равен квадрату своего индекса, если нету таких элементов, то вывести слово 'not found'.
$numbers = [0,1,4,8,16,15,23,42];
$amount = count($numbers);
foreach($numbers as $key => $number)
{if ($key == sqrt($number))
    echo $key, PHP_EOL;
else{
    echo 'not found' , PHP_EOL;
    }
}
