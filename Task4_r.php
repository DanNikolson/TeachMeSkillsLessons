<?php
//4. Дан текст, содержащий даты в формате 2022/12/05 19:00. Выведите все даты, у которых год в диапазоне между 1000 и 2022.
$stringDates = 'Даны следующие даты:2022/12/05 19:00 ,1971/01/30 13:00 ,1931/05/04 21:12 ';
$pattern = "~(?:1\d\d\d|20[0-1]\d|202[0-2])\/(?:[0-5][0-9])\/(?:0[1-9]|[1-2][0-9]|[3][0-1])\s*(?:[0-1][0-9]|2[0-3])\:(?:[0-5][0-9])~";
preg_match_all($pattern, $stringDates, $matches);
print_r($matches);