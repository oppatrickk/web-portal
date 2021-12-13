<?php
require_once 'database/config.php';
# [START gae_simple_front_controller]
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
    case '/landing.php':
        require 'landing.php';
        break;
    case '/pages/login/login.php':
        require 'pages/login/login.php';
        break;
    case '/pages/dashboard/dashboard.php':
        require 'pages/dashboard/dashboard.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
# [END gae_simple_front_controller]