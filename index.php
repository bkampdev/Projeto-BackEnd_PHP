<?php
    session_start();
    require('vendor/autoload.php');

    define('INCLUDE_PATH_STATIC','http://localhost/dev_web/DankiCode/Views/Pages/');
    define('INCLUDE_PATH','http://localhost/dev_web/DankiCode/');

    $app = new DankiCode\Application();

    $app->run();
?>