<?php
include(__DIR__ . "/data/engine/security_check.inc");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>DerevoXP</title>
</head>

<body>


    <div class="root">
        <div class="place">

            <?php
            echo ('<p id="indicator">Вы успешно зарегистрировались в системе и теперь можете вволю насладиться чтением этого замечательного текста, ' . $_SESSION['user'] . '.</p>');
            ?>

            <button onclick="logout()">ВЫХОД</button>

        </div>
    </div>

    <script src="/data/script/script.js"></script>

</body>

</html>

<!-- LDIP - протокол погуглить -->
<!-- заменить при восстановлении доступа проверку не по хешу емейла, а по хешу пароля -->