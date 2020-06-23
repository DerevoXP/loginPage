<?php
include __DIR__ . "/../engine/db.php";
$repository = new DbEngine();


//////////// проверка механизма добавления хешей в базу ////////////

// $testLogin = "test";
// $testPassword = "testPassword";
// $testEmail = "testEmail";

// $testSalt1 = 'testSalt1';
// $testSalt2 = 'testSalt2';
// $testSalt3 = 'testSalt3';

// $login = hash("sha256", $testLogin . $testSalt1);
// $password = hash("sha256", $testPassword . $testSalt2);
// $email = hash("sha256", $testEmail . $testSalt3);

// $checkExistsLogin = $repository->checkLogin($login);
// $checkExistsEmail = $repository->checkEmail($email);

// if (!count($checkExistsLogin)) {
//     if (!count($checkExistsEmail)) {
//         $repository->setUser($login, $password, $email);
//     } else {
//         echo "Такой логин уже зарегистрирован!";
//     }   
// } else {
//     echo "Пользователь с таким именем уже существует!";
// }


//////////// добавление в базу тестовых данных ////////////
$repository->setUser("admin", "12345", "testEmail", time());


//////////// проверка логина ////////////

// $responseLogin = $repository->checkLogin('testLogin');
// var_dump($responseLogin);


//////////// проверка email ////////////

// $responseEmail = $repository->checkEmail('testEmail');
// var_dump($responseEmail);


//////////// проверка авторизации ////////////
// $responseValidation = $repository->getUserData('admin', 12345);
// var_dump($responseValidation);


//////////// установка флага запроса на смену пароля ////////////
// $repository->setFlag("testEmail");


//////////// сброс пароля и обнуление флага ////////////
// $checkExistsEmail = $repository->getFlag("testEmail");
// if (isset($checkExistsEmail[0]['email'])) { 
//         $repository->resetPass("anotherPass", "testEmail");
//         echo ("ok");
// } else {
//     echo ("Этот пользователь не запрашивал смену пароля.");
// }