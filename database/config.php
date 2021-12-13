<?php

$user = getenv('CLOUDSQL_USER');
$pass = getenv('CLOUDSQL_PASSWORD');
$inst = getenv('CLOUDSQL_DSN');
$db = getenv('CLOUDSQL_DB');

$connection = mysqli_connect(null, $user, $pass, $db, null, $inst);

if (!$connection){
    echo "ERROR!".mysqli_connect_error();
}
?>