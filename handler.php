<?php

ini_set('allow_url_fopen', 1);
switch(@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/index':
    case '/index.php':
    case '/':
        require 'index.php';
        break;
    case 'pages/login/login.php':
        require 'pages/login/login.php';
        break;
    case 'pages/dashboard/dashboard.php':
        require 'pages/dashboard/dashboard.php';
        break;
    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}