<?php
//6. Удалите указанный элемент из массива. После удаления элемента необходимо нормализовать целочисленные ключи.
$myArray = ['Hello', 1, 'world', '!', 'My', 'name','is','Akakii'];
print_r($myArray);
$what_to_delete = readline('Введите то, что нужно удалить из массива: ');
foreach($myArray as $key => $value){
    if($value == $what_to_delete){
        unset($myArray[$key]);
    }
}
print_r(array_values($myArray));//Восстановление индексации массива
?>