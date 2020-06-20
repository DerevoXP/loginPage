<?php
include __DIR__ . "/db.php";
$repository = new DbEngine();

$rawEmail = preg_match('/@/', $_REQUEST["email"]) ? $_REQUEST["email"] : "error";

if ($rawEmail == "error") {
    die("Email должен быть действующим, иначе вы не сможете восстановить доступ к аккаунту в случае утраты пароля.");
}

if (isset($rawEmail)) {

    $email = hash("sha256", $rawEmail . $salt3);
    $checkExistsEmail = $repository->checkEmail($email);

        if (isset($checkExistsEmail[0]['email'])) {

            mail ( $rawEmail, "Восстановление доступа к derevoxp.ru" , "Для сброса пароля нажмите на эту ссылку: derevoxp.ru/newPassSetter.php?key=" . $checkExistsEmail[0]['email']);
            echo ("ok");
            
        } else {
            echo ("Такой логин не зарегистрирован!");
        }

}