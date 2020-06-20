<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP remind password</title>
</head>

<body>

    <div class="menu">
        <a href="login.php">Вход </a>/<a href="registration.php"> Регистрация </a>/<a href="remindpass.php"> Восстановление пароля</a><br /><br />
    </div>

    <div class="inputs">

        <input id="email" type="email" pattern="\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}" placeholder="Введите email" /> <br /><br />
        <button onclick="remindPass()">SEND</button> <br /><br />
        <p id="indicator"></p>

    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>