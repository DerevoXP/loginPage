<?php
include __DIR__ . "/db.php";
$repository = new DbEngine();

$rawLogin = preg_match('/^[A-ZА-ЯЁa-zа-яё0-9]{1,20}$/u', $_REQUEST["login"]) ? $_REQUEST["login"] : "error";
$rawPassword = preg_match('/^[A-ZА-ЯЁa-zа-яё0-9@!#()*]{1,20}$/u', $_REQUEST["password"])  ? $_REQUEST["password"] : "error";
$rawEmail = preg_match('/@/', $_REQUEST["email"]) ? $_REQUEST["email"] : "error";

if ($rawLogin == "error") {
    die("Недопустимый формат! В поле имени допустимы буквы латинского и русского алфавита в любом регистре и цифры.");
}

if ($rawPassword == "error") {
    die("Недопустимый формат! В поле пароля допустимы буквы латинского алфавита в любом регистре и цифры, а так же символы @!#()*.");
}

if ($rawEmail == "error") {
    die("Недопустимый формат! Email должен быть действующим, иначе вы не сможете восстановить доступ к аккаунту в случае утраты пароля.");
}

if (isset($rawLogin) and isset($rawPassword) and isset($rawEmail)) {
    $login = hash("sha256", $rawLogin . $salt1);
    $password = hash("sha256", $rawPassword . $salt2);
    $email = hash("sha256", $rawEmail . $salt3);

    $checkExistsLogin = $repository->checkLogin($login);
    $checkExistsEmail = $repository->checkEmail($email);

    if (!count($checkExistsLogin)) {
        if (!count($checkExistsEmail)) {
            $repository->setUser($login, $password, $email, time());
            echo 'ok';
        } else {
            echo ("Такой email уже зарегистрирован!");
        }
    } else {
        echo ("Пользователь с таким именем уже существует!");
    }
} else {
    echo ("Все поля должны быть заполнены корректно!");
}
