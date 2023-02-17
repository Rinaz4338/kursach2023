<?php

// подключение к базе данных
$mysql = new mysqli('localhost', 'root', '', 'arenda');

// поддержка русских символов
mysqli_set_charset($mysql, 'utf8');
if($mysql == false)
{
    echo "Ошибка подключения";
}

?>