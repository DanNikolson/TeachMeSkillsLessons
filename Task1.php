<?php
// Мой первоначальный вариант, рабочий, но довольно странный.

// $N = readline("Введите число:");
// if ($N > 10) {
//     echo $N + 100;
// } elseif ($N < 10) {
//     echo $N - 30;
// } else {
//     echo 'Введите число, не равное 10';
// }

$N = readline("Введите число:");
if ($N > 10){
    $N = $N+100;
} else {
    $N = $N-30;
}
echo $N;
?>