<?php
session_start();

if (!isset($_SESSION['user'])) {

    echo ('<meta http-equiv="refresh" content="2; url=login.php">');

    die('   
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/data/css/main.css">
    <title>OOPS...</title>
    </head>
    <body>
    <div class="root">
    <div class="place">
    <p id="indicator">Вход только для авторизованных пользователей!</p>
    </div>
    </div>
    </body>  
    ');
    
}