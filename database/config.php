<?php

if (!getenv('CLOUDSQL_DSN') || !getenv('CLOUDSQL_USER') || false === getenv('CLOUDSQL_PASSWORD')) {
    die('Set CLOUDSQL_DSN, CLOUDSQL_USER, and CLOUDSQL_PASSWORD environment variables');
}

$dsn = getenv('CLOUDSQL_DSN');
$user = getenv('CLOUDSQL_USER');
$password = getenv('CLOUDSQL_PASSWORD');

$link = mysql_connect(':/cloudsql/codex-bu:asia-southeast2:codex-bu',
    'root', // username
    'U^YuNDKb4Oh#pgjOSHkR'      // password
);
mysql_select_db('codex');

?>