<?php
include __DIR__ . "/db.php";
$repository = new DbEngine();

$rawEmail = $_REQUEST['email'];
$pass = $_REQUEST['password'];
$email = hash("sha256", $rawEmail . $salt3);

$checkExistsEmail = $repository->getFlag($email);

if (isset($checkExistsEmail[0]['email']) and isset($pass)) {
   
        $password = hash("sha256", $pass . $salt2);
        $repository->resetPass($password, $email);
        echo ("ok");

} else {
    echo ("Этот пользователь не запрашивал смену пароля.");
}
