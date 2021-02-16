<?php

session_start();
require_once 'autoload.php';
require_once 'src/backend/helpers/utils.php';
require_once 'src/backend/config/parameters.php';
require_once 'src/backend/config/config_db.php';
require_once 'src/backend/config/db.php';

if (isset($_GET['src/backend/controller'])) {
    $nombre_controlador = $_GET['src/backend/controller'] . 'Controller';
} else if (!isset($_GET['src/backend/controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
} else {
    show_error();
    exit();
}

if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else if (!isset($_GET['src/backend/controller']) && !isset($_GET['action'])) {
        controller_default();
    } else {
        show_error();
    }
} else {
    show_error();
}

// funciones

function show_error()
{
    $error = new errorController();
    $error->index();
}

function controller_default()
{
    $controller = new homeController();
    $controller->index();
}