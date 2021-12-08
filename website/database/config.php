<?php
const DB_SERVER = '34.124.248.106';
const DB_USERNAME = 'root';
const DB_PASSWORD = '123456';
const DB_NAME = 'codex';

/* Attempt to connect to MySQL database */
$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
?>