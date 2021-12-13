<?php

const DB_SERVER = '34.124.248.106';
//const DB_SERVER = 'null';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'U^YuNDKb4Oh#pgjOSHkR';
const DB_NAME = 'codex';
const DB_INSTANCE = '/cloudsql/codex-bu:asia-southeast1:codex';

/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, null, DB_INSTANCE);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>