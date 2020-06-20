<?php
session_start();
include __DIR__ . "/db.php";

$data = new DbEngine();

$rawLogin = preg_match('/^[A-ZА-ЯЁa-zа-яё0-9]{1,20}$/u', $_REQUEST["login"]) ? $_REQUEST["login"] : null;
$rawPassword = preg_match('/^[A-ZА-ЯЁa-zа-яё0-9@!#()*]{1,20}$/u', $_REQUEST["password"])  ? $_REQUEST["password"] : null;

if ($rawLogin == "error" or $rawPassword == "error") {
    die("Недопустимый формат! В поле имени допустимы буквы латинского и русского алфавита в любом регистре и цифры, в поле пароля допустимы буквы латинского алфавита в любом регистре и цифры, а так же символы @!#()*");
}

$login = hash("sha256", $rawLogin . $salt1);
$password = hash("sha256", $rawPassword . $salt2);
$checkUser = $data->getUserData($login, $password);

if (@$checkUser[0]['login'] == $login and @$checkUser[0]['pass'] == $password) {
        $_SESSION['user'] = $rawLogin;
        echo ("ok");
    } else {
        echo ("Логин или пароль введены неверно!");
    }
