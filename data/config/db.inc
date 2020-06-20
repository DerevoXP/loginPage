<?php

$salt1 = 'NothingElseMatter';
$salt2 = 'DuHastMihGefracht';
$salt3 = 'DerTodesengelSchwebtDurchHimmelshallen';

// для derevoxp.ru или Убунты
// define('DB_URL', "dblib:host=localhost;dbname=a0438483_forLogins");

// удалённого подключения к derevoxp.ru
define('DB_URL', "mysql:host=derevoxp.ru;dbname=a0438483_forLogins");

// для Винды
// define("DB_URL","sqlsrv:Server=derevoxp.ru;Database=a0438483_forLogins");

// типа универсальное решение для Убунты и Винды, но на сервере derevoxp.ru не пашет
// define("DB_URL","odbc:DRIVER={ODBC Driver 17 for SQL Server}; SERVER={derevoxp.ru}; Database={a0438483_forLogins}");

define("USER", "a0438483_forLogins");
define("PWD", "не скажу - идите на сервер по ссылке https://derevoxp.ru/ и взламывайте на здоровье )))");