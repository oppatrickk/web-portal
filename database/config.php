<?php
// Check Environment
if (!getenv('CLOUDSQL_DSN') || !getenv('CLOUDSQL_USER') || false === getenv('CLOUDSQL_PASSWORD')) {
    // Local Host
    $dsn = 'mysql:host=localhost;dbname=codex';
    $user = 'root';
    $password = '';
}
else{
    // Cloud Host
    $dsn = getenv('CLOUDSQL_DSN');
    $user = getenv('CLOUDSQL_USER');
    $password = getenv('CLOUDSQL_PASSWORD');
}

// Create the PDO client
$db = new PDO($dsn, $user, $password);

?>