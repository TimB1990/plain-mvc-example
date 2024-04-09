<?php
require_once '../app/init.php';

define('PROJECT_ROOT', '/projects/mvc/public');

function redirect($to)
{
    header("Location: " . $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . PROJECT_ROOT . $to);
    exit;
}

$app = new App;
