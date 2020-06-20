<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP registration</title>
</head>

<body>

    <div class="menu">
    <a href="login.php">Вход </a>/<a href="registration.php"> Регистрация </a>/<a href="remindpass.php"> Восстановление пароля</a><br /><br />
    </div>

    <div>

        <input id="login" name="login" pattern="[A-ZА-ЯЁa-zа-яё0-9]{1,20}" placeholder="Введите логин"/> <br /><br />
        <input id="password" type="password" pattern="[A-Za-z0-9@!#()*]{1,30}" placeholder="Введите пароль"/> <br /><br />
        <input id="confirmPassword" type="password" pattern="[A-Za-z0-9@!#()*]{1,30}" placeholder="Повторите пароль" /><p id="passMatch"></p><br /><br />
        <input id="email" type="email" pattern="\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}" placeholder="Введите email"/> <br /><br />
        <button onclick="submitToRegistrationFunction()">SEND</button> <br /><br />
        <p id="indicator"></p>

    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>