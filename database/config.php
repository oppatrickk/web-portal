<?php

try {
    # [START cloud_sql_mysql_pdo_create_socket]
    $username = 'root';
    $password = 'U^YuNDKb4Oh#pgjOSHkR';
    $dbName = 'codex';
    $connectionName = getenv("codex-bu:asia-southeast1:codex");
    $socketDir = getenv('DB_SOCKET_DIR') ?: '/cloudsql';

    // Connect using UNIX sockets
    $dsn = sprintf(
        'mysql:dbname=%s;unix_socket=%s/%s',
        $dbName,
        $socketDir,
        $connectionName
    );

    // Connect to the database.
    $conn = new PDO($dsn, $username, $password, $conn_config);
    # [END cloud_sql_mysql_pdo_create_socket]
} catch (TypeError $e) {
    throw new RuntimeException(
        sprintf(
            'Invalid or missing configuration! Make sure you have set ' .
            '$username, $password, $dbName, and $dbHost (for TCP mode) ' .
            'or $connectionName (for UNIX socket mode). ' .
            'The PHP error was %s',
            $e->getMessage()
        ),
        (int) $e->getCode(),
        $e
    );
} catch (PDOException $e) {
    throw new RuntimeException(
        sprintf(
            'Could not connect to the Cloud SQL Database. Check that ' .
            'your username and password are correct, that the Cloud SQL ' .
            'proxy is running, and that the database exists and is ready ' .
            'for use. For more assistance, refer to %s. The PDO error was %s',
            'https://cloud.google.com/sql/docs/mysql/connect-external-app',
            $e->getMessage()
        ),
        (int) $e->getCode(),
        $e
    );
}

//const DB_SERVER = '34.124.248.106';
//const DB_USERNAME = 'root';
//const DB_PASSWORD = 'U^YuNDKb4Oh#pgjOSHkR';
//const DB_NAME = 'codex';
//const DB_INSTANCE = '/cloudsql/codex-bu:asia-southeast1:codex';

/* Attempt to connect to MySQL database */
//$link = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, null, DB_INSTANCE);

// Check connection
//if ($link->connect_error) {
    //die("Connection failed: " . $link->connect_error);
//}
?>