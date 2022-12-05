<?php
//4. Разработайте функцию, с помощью которой можно проверить является ли заданная строка палиндромом.

function palindrome($string) {
    //пытался сделать так, чтобы длинные тексты - палиндромы тоже проверялись,но так и не понял,почему не работает.
    // $string = str_replace(" ", "", $string);
    // $string = mb_strtolower($string);
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
  }
  echo palindrome('madam'). PHP_EOL;
  echo palindrome('robot');