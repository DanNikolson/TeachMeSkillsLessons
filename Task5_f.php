<?php
//5. Необходимо разработать функцию, позволяющую определить количество вхождений символа в строку (строка и символ задаются пользователем).
function symbol_in_string(){
    $string = readline('Введите строку: ');
    $symbol = readline('Введите символ: ');
    return substr_count($string, $symbol);
}
echo symbol_in_string();
?>