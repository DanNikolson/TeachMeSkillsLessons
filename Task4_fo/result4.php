<?php
	$pass = '12345';
    if($_POST['pass'] == $pass){
        echo 'правильный пароль';
    }else{
        echo 'неправильный пароль';
    }
?>