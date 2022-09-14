<?php
$connect = mysqli_connect('localhost', 'root','root','crud2');
if (!$connect) {
    die ('ошибка соединения к бд');
}