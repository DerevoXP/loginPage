<?php
session_start();

// session_destroy();
if (!isset($_SESSION['user'])) {
    echo ('<meta http-equiv="refresh" content="1; url=login.php">');
    die('Вход только для авторизованных пользователей!');
}