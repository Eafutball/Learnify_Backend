<?php

require_once "Class/Usuarios.php";
require_once "Class/Categoria.php";
require_once "Enums/Roles.php";
require_once "Enums/Nivel.php";
require_once "Enums/Estado.php";



$request = $_SERVER['REQUEST_URI'];
$viewDir = '/views/';

switch ($request) {
    case '':
    case '/':
        require __DIR__ . $viewDir . 'home.php';
        break;

    case '/views/users':
        require __DIR__ . $viewDir . 'users.php';
        break;

    case '/contact':
        require __DIR__ . $viewDir . 'contact.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . $viewDir . '404.php';
}