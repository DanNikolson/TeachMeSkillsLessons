<?php
function count_function_calls(){
    static $count = 0;
    $count++;
    echo $count . PHP_EOL;
}
for ($i=0; $i<10; $i++) count_function_calls();
?>