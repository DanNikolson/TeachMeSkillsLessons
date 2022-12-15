<?php
//3. Дана строка с буквами, пробелами и цифрами. Найдите сумму всех чисел из данной строки.
$testSTR = "Строка с буквами,                 , и 3412348 1331    1212";
preg_match_all("/\d/", $testSTR, $matches);
function multisum($matches):float{
    $sum = array_sum($matches);
    foreach($matches as $match) {
        $sum += is_array($match) ? multisum($match) : 0;
    }
    return $sum;
}
echo multisum($matches);
?>