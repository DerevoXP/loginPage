<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP login</title>
</head>

<body>

    <div class="root">

        <div class="menu">
            <a href="login.php">Вход </a>/
            <a href="registration.php"> Регистрация </a>/
            <a href="remindpass.php"> Восстановление пароля</a>
        </div>

        <div class="place">

            <input id="login" name="login" pattern="[A-ZА-ЯЁa-zа-яё0-9]{1,20}" placeholder="Введите логин" />
            <input id="password" type="password" pattern="[A-Za-z0-9@!#()*]{1,30}" placeholder="Введите пароль" />
            <button onclick="loginFunction()">SEND</button>
            <p id="indicator"></p>

        </div>
    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>