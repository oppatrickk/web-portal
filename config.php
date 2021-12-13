<?php
// Ensure the required environment variables are set to run the application
if (!getenv('CLOUDSQL_DSN') || !getenv('CLOUDSQL_USER') || false === getenv('CLOUDSQL_PASSWORD')) {
    die('Set CLOUDSQL_DSN, CLOUDSQL_USER, and CLOUDSQL_PASSWORD environment variables');
}

# [START gae_cloudsql_example]
// If the unix socket is unavailable, try to connect using TCP. This will work
// if you're running a local MySQL server or using the Cloud SQL proxy, for example:
//
//     $ cloud_sql_proxy -instances=your-connection-name=tcp:3306
//
// This will mean your DSN for connecting locally to Cloud SQL would look like this:
//
//     // for MySQL
//     $dsn = "mysql:dbname=DATABASE;host=127.0.0.1";
//     // for PostgreSQL
//     $dsn = "pgsql:dbname=DATABASE;host=127.0.0.1";
//
$dsn = getenv('CLOUDSQL_DSN');
$user = getenv('CLOUDSQL_USER');
$password = getenv('CLOUDSQL_PASSWORD');

// create the PDO client
$db = new PDO($dsn, $user, $password);

// create the tables if they don't exist
$sql = 'CREATE TABLE IF NOT EXISTS contacts (name VARCHAR(255), phone VARCHAR(255), email VARCHAR(255))';
$stmt = $db->prepare($sql);
$stmt->execute();
# [END gae_cloudsql_example]
?>