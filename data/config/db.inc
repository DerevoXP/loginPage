<?php

$salt1 = 'NothingElseMatter';
$salt2 = 'DuHastMihGefracht';
$salt3 = 'DerTodesengelSchwebtDurchHimmelshallen';

// для удалённого подключения к derevoxp.ru с Убунты ???
// define('DB_URL', "dblib:host=derevoxp.ru;dbname=a0438483_forLogins");

// для удалённого подключения к derevoxp.ru с Винды
define('DB_URL', "mysql:host=derevoxp.ru;dbname=a0438483_forLogins");

// для локального подключения к derevoxp.ru
// define('DB_URL', "mysql:host=localhost;dbname=a0438483_forLogins");

define("USER", "a0438483_forLogins");
define("PWD", "не скажу - идите на сервер по ссылке https://derevoxp.ru/ и взламывайте на здоровье )))");

// для запуска с терминала в Винде
// php -S localhost:4444 -t "C:\Users\derev\Documents\HackerU\06_EXPERIMENTS\login"