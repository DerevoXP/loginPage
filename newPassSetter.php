<?php
include __DIR__ . "/data/engine/db.php";
$repository = new DbEngine();
$key = $_GET['key'];
$repository->setFlag($key);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP remind password</title>
</head>

<body>

    <div class="inputs">

        <input id="password" type="password" pattern="[A-Za-z0-9@!#()*]{1,30}" placeholder="Новый пароль" /> <br /><br />
        <input id="confirmPassword" type="password" pattern="[A-Za-z0-9@!#()*]{1,30}" placeholder="Повторите пароль" />
        <p id="passMatch"></p><br /><br />
        <input id="email" type="email" pattern="\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}" placeholder="Введите email"/> <br /><br />
        <button onclick="resetPass()">SEND</button>
        <p id="indicator"></p>

    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>