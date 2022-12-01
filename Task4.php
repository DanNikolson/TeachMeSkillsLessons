<?php
//4. Задан массив слов. Осуществить поиск по заданному слову и вывести индекс элемента массива.

$vashe_slovo = readline("Введите слово, а я его поищу в массиве:");
function Search($value, $slova)
{
    return (array_search($value, $slova));
}
$slova = ['This', 'is', 'Elon', 'Musk', '.',"Tesla's",'Co','-','founder', 'and', 'CEO'];
$value = $vashe_slovo;
print_r(Search($value, $slova));
?>