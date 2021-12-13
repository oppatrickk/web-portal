<?php
require_once 'config.php';
# [START gae_simple_front_controller]
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
    case '/contacts.php':
        require 'contacts.php';
        break;
    case '/contact-add.php':
        require 'contact-add.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
# [END gae_simple_front_controller]