<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP login</title>
</head>

<body>

    <div class="menu">
        <a href="login.php">Вход </a>/<a href="registration.php"> Регистрация </a>/<a href="remindpass.php"> Восстановление пароля</a><br /><br />
    </div>

    <div class="inputs">

        <input id="login" name="login" pattern="[A-ZА-ЯЁa-zа-яё0-9]{1,20}" placeholder="Введите логин" /> <br /><br />
        <input id="password" type="password" pattern="[A-Za-z0-9@!#()*]{1,30}" placeholder="Введите пароль" /> <br /><br />
        <button onclick="loginFunction()">SEND</button> <br /><br />
        <p id="indicator"></p>

    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>