<?php

const DB_SERVER = '34.124.248.106';
const DB_USERNAME = 'root';
const DB_PASSWORD = '123456';
const DB_NAME = 'codex';
const DB_INSTANCE = ':/cloudsql/codex-bu:asia-southeast1:codex';

/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, 0, DB_INSTANCE);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>