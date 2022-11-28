<?php
$N = readline("Введите число:");
if($N < 1) echo 'Число должно быть больше 1';
else {
$sum = 0;
for ($i = 2; $i <= $N; $i++){
    $sum += $i * $i;
}
echo $sum;
}
?>
