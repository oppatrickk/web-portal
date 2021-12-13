<?php

const DB_SERVER = '34.101.86.177';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'U^YuNDKb4Oh#pgjOSHkR';
const DB_NAME = 'codex';
const DB_INSTANCE = '/cloudsql/codex-bu:asia-southeast2:codex-bu';

/* Attempt to connect to MySQL database */
$link = new mysqli(null, DB_USERNAME, DB_PASSWORD, DB_NAME, null, DB_INSTANCE);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>