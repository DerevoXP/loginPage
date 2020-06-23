<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP remind password</title>
</head>

<body>

    <div class="root">

        <div class="menu">
            <a href="login.php">Вход </a>/
            <a href="registration.php"> Регистрация </a>/
            <a href="remindpass.php"> Восстановление пароля</a>
        </div>

        <div class="place">

            <input id="email" type="email" pattern="\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}" placeholder="Введите email" />
            <button onclick="remindPass()">SEND</button>
            <p id="indicator"></p>

        </div>
    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>