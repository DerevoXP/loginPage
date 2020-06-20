<?php
include ( __DIR__ . "/data/engine/security_check.inc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DerevoXP</title>
</head>
<body>

    <?php
    echo ('<p>Вы успешно зарегистрировались в системе и теперь можете вволю насладиться чтением этого замечательного текста, ' . $_SESSION['user'] . '.</p>');
    ?>

    <button onclick="logout()">ВЫХОД</button>

    <script src="/data/script/script.js"></script>
    
</body>
</html>