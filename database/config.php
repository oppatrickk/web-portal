<?php
// Check Environment
//if (!getenv('CLOUDSQL_DSN') || !getenv('CLOUDSQL_USER') || false === getenv('CLOUDSQL_PASSWORD')) {
 //   die('Set CLOUDSQL_DSN, CLOUDSQL_USER, and CLOUDSQL_PASSWORD environment variables');
//}

// Google Cloud App Engine
//$dsn = getenv('CLOUDSQL_DSN');
//$user = getenv('CLOUDSQL_USER');
//$password = getenv('CLOUDSQL_PASSWORD');

// Local Host
$dsn = 'mysql:host=localhost;dbname=codex';
$user = 'root';
$password = '';

// Create the PDO client
try{
    $db = new PDO($dsn, $user, $password);
}
catch(PDOException $e){
    $e->getMessage();
}

?>