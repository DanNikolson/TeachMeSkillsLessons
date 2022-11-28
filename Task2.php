<?php
$N = readline("Введите число:");
if ($N/2 == ceil($N/2)){
    $N = $N/2;
} else {
    $N = $N*3;
}
echo $N;
?>