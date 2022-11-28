<?php
//разбиваем строку на массив, перебираем, ищем длинное слово
$string = readline("Введите строку:");
$words = explode(" ", $string);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
    if (strlen($word) > $longestWordLength) {
        $longestWordLength = strlen($word);
        $longestWord = $word;
    }
}
echo $longestWord;

?>